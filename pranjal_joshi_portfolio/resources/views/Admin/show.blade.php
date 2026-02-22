@extends('layouts.admin.layout')

@section('title','Appointment Details')

@section('header','Appointment Details')

@section('content')

<div class="max-w-4xl mx-auto">

    {{-- Success Message --}}
    @if(session('success'))
        <div class="mb-6 px-4 py-3 rounded-lg bg-green-50 text-green-700 border border-green-200">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">

        {{-- Header --}}
        <div class="px-8 py-6 border-b bg-gray-50">
            <h2 class="text-lg font-semibold text-navy">
                Appointment #{{ $appointment->id }}
            </h2>
            <p class="text-sm text-gray-500">
                Created on {{ $appointment->created_at->format('d M Y, h:i A') }}
            </p>
        </div>

        {{-- Content --}}
        <div class="p-8 grid md:grid-cols-2 gap-8">

            {{-- Patient Info --}}
            <div class="space-y-4">
                <h3 class="text-md font-semibold text-navy border-b pb-2">Patient Information</h3>

                <div class="space-y-3 text-sm">
                    <p><span class="font-medium text-gray-600">Name:</span> {{ $appointment->name }}</p>
                    <p><span class="font-medium text-gray-600">Email:</span> {{ $appointment->email }}</p>
                    <p><span class="font-medium text-gray-600">DOB:</span> {{ $appointment->dob }}</p>
                    <p><span class="font-medium text-gray-600">Gender:</span> {{ $appointment->gender }}</p>
                    <p><span class="font-medium text-gray-600">Mobile:</span> {{ $appointment->contact_mobile }}</p>
                    <p><span class="font-medium text-gray-600">Address:</span> {{ $appointment->address }}</p>
                </div>
            </div>

            {{-- Appointment Info --}}
            <div class="space-y-4">
                <h3 class="text-md font-semibold text-navy border-b pb-2">Appointment Information</h3>

                <div class="space-y-3 text-sm">
                    <p><span class="font-medium text-gray-600">Date:</span> {{ $appointment->appointment_date }}</p>
                    <p><span class="font-medium text-gray-600">Time:</span> {{ $appointment->appointment_time }}</p>
                    <p><span class="font-medium text-gray-600">Type:</span> {{ $appointment->appointment_type }}</p>
                    <p><span class="font-medium text-gray-600">Reason:</span> {{ $appointment->visit_reason }}</p>
                    <p><span class="font-medium text-gray-600">Symptoms:</span> {{ $appointment->current_symptoms ?? '—' }}</p>
                    <p><span class="font-medium text-gray-600">Allergies:</span> {{ $appointment->allergies ?? '—' }}</p>
                    <p><span class="font-medium text-gray-600">History:</span> {{ $appointment->past_psychiatric_history ?? '—' }}</p>
                </div>
            </div>

        </div>

        {{-- Notes --}}
        @if($appointment->additional_notes)
        <div class="px-8 pb-6">
            <h3 class="text-md font-semibold text-navy mb-2">Additional Notes</h3>
            <div class="text-sm text-gray-700 bg-gray-50 p-4 rounded-lg border">
                {{ $appointment->additional_notes }}
            </div>
        </div>
        @endif

        {{-- Status Update --}}
        <div class="px-8 py-6 border-t bg-gray-50">
            <form action="{{ route('admin.update', $appointment->id) }}" method="POST" class="flex items-center gap-4">
                @csrf
                @method('PUT')

                <label class="text-sm font-medium text-navy">Update Status</label>

                <select name="status"
                class="px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-sage">

                    <option value="1" {{ $appointment->status==1?'selected':'' }}>Pending</option>
                    <option value="2" {{ $appointment->status==2?'selected':'' }}>Confirmed</option>
                    <option value="3" {{ $appointment->status==3?'selected':'' }}>Completed</option>
                    <option value="4" {{ $appointment->status==4?'selected':'' }}>Cancelled</option>

                </select>

                <button type="submit"
                class="bg-navy text-white px-6 py-2 rounded-lg hover:bg-sage transition">
                    Save
                </button>

            </form>
        </div>

    </div>

</div>

@endsection