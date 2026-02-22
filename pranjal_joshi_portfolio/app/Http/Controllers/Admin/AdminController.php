<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppointmentDetails;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'totalAppointments' => AppointmentDetails::count(),
            'todayAppointments' => AppointmentDetails::whereDate('appointment_date',today())->count(),
            'newPatients' => AppointmentDetails::where('appointment_type','New')->count(),
            'recentAppointments' => AppointmentDetails::latest()->take(5)->get(),
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validate and store the appointment details
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[a-zA-Z\s\.\'-]+$/'],
        'email' => ['required','email:rfc,dns','max:255'],
        'dob' => ['required', 'date','before:today','after:1900-01-01'],
        'gender' => ['required','in:Male,Female,Other'],
        'contact_mobile' => ['required','digits_between:10,10'],
        'address' => ['required','string','min:5','max:500'],
        'appointment_date' => ['required','date','after_or_equal:today'],
        'appointment_time' => ['required','date_format:H:i','after_or_equal:10:00','before_or_equal:18:00'],
        'appointment_type' => ['required','in:New,Follow-up,Other'],
        'visit_reason' => ['required','in:General Consultation,Anxiety / Stress,Depression,Medication Review,Other'],
        'current_symptoms' => ['nullable','string','max:1000'],
        'allergies' => ['nullable','string','max:1000'],
        'past_psychiatric_history' => ['nullable','in:None,Anxiety,Depression,Bipolar Disorder,Other'],
        'additional_notes' => ['nullable','string','max:1000'],
    ]);

    $appointment = AppointmentDetails::create($validatedData);

    // Generate PDF
    $pdf = Pdf::loadView('Admin.pdf.appointment-slip', [
        'appointment' => $appointment
    ]);

    return $pdf->download('appointment-slip.pdf');
    }

    public function show($id)
    {
        $appointment = AppointmentDetails::findOrFail($id);
        return view('Admin.show', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:1,2,3,4'
        ]);

        $appointment = AppointmentDetails::findOrFail($id);
        $appointment->status = (int) $request->status;
        $appointment->save();

        return back()->with('success', 'Appointment status updated successfully');
    }

    public function list(Request $request)
    {
        $query = AppointmentDetails::query();

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $appointments = $query->latest()->paginate(10);

        return view('admin.list', compact('appointments'));
    }
}
