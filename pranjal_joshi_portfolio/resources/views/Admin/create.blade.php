@extends('layouts.app')
@section('title','Book Appointment')
@section('content')
<style>
    .input {
        background-color: whitesmoke;
        padding: 1rem;
        width: -webkit-fill-available;
    }

    .input-error {
        border-color: #ef4444;
        box-shadow: 0 0 0 2px rgba(254, 202, 202, 0.7);
    }

    .error {
        color: #dc2626;
        font-size: 0.875rem;
        margin-top: 4px;
        font-weight: 500;
    }
</style>
<section class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 py-14">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 p-10">
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-navy">Book Your Appointment</h1>
                <p class="text-gray-500 mt-2">All information is confidential</p>
            </div>
            @if(session('success'))
            <div class="bg-green-50 border border-green-300 text-green-800 px-5 py-4 rounded-lg mb-6">{{ session('success') }}</div>
            @endif
            @if($errors->any())
            <div class="bg-red-50 border border-red-300 text-red-800 px-5 py-4 rounded-lg mb-8">
                <p class="font-semibold mb-2">Please fix the following errors:</p>
                <ul class="list-disc list-inside text-sm space-y-1">
                    @foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ route('admin.store') }}" class="space-y-12">@csrf
                <div>
                    <h2 class="text-lg font-semibold text-navy mb-6 border-b pb-2">Patient Information</h2>
                    <div class="grid md:grid-cols-2 gap-7">
                        <div>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Full Name"
                                class="input py-4 @error('name') input-error @enderror">
                            @error('name')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email Address"
                                class="input py-4 @error('email') input-error @enderror">
                            @error('email')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <input type="date" name="dob" value="{{ old('dob') }}"
                                class="input py-4 @error('dob') input-error @enderror">
                            @error('dob')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <select name="gender" class="input py-4 @error('gender') input-error @enderror">
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender')=='Male'?'selected':'' }}>Male</option>
                                <option value="Female" {{ old('gender')=='Female'?'selected':'' }}>Female</option>
                                <option value="Other" {{ old('gender')=='Other'?'selected':'' }}>Other</option>
                            </select>
                            @error('gender')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <input type="tel" name="contact_mobile" value="{{ old('contact_mobile') }}" placeholder="Mobile Number (10–15 digits)"
                                pattern="[0-9]{10,15}"
                                class="input py-4 @error('contact_mobile') input-error @enderror">
                            @error('contact_mobile')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div class="md:col-span-2">
                            <input type="text" name="address" value="{{ old('address') }}" placeholder="Full Address"
                                class="input py-4 @error('address') input-error @enderror">
                            @error('address')<p class="error">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-lg font-semibold text-navy mb-6 border-b pb-2">Appointment Details</h2>
                    <div class="grid md:grid-cols-2 gap-7">
                        <div>
                            <input type="date" name="appointment_date" value="{{ old('appointment_date') }}" min="{{ date('Y-m-d') }}"
                                class="input py-4 @error('appointment_date') input-error @enderror">
                            @error('appointment_date')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <input type="time" name="appointment_time" value="{{ old('appointment_time') }}" min="10:00" max="18:00" step="1800"
                                class="input py-4 @error('appointment_time') input-error @enderror">
                            @error('appointment_time')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <select name="appointment_type" class="input py-4 @error('appointment_type') input-error @enderror">
                                <option value="">Appointment Type</option>
                                <option value="New" {{ old('appointment_type')=='New'?'selected':'' }}>New</option>
                                <option value="Follow-up" {{ old('appointment_type')=='Follow-up'?'selected':'' }}>Follow-up</option>
                                <option value="Other" {{ old('appointment_type')=='Other'?'selected':'' }}>Other</option>
                            </select>
                            @error('appointment_type')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <select name="visit_reason" class="input py-4 @error('visit_reason') input-error @enderror">
                                <option value="">Reason for Visit</option>
                                <option value="General Consultation" {{ old('visit_reason')=='General Consultation'?'selected':'' }}>General Consultation</option>
                                <option value="Anxiety / Stress" {{ old('visit_reason')=='Anxiety / Stress'?'selected':'' }}>Anxiety / Stress</option>
                                <option value="Depression" {{ old('visit_reason')=='Depression'?'selected':'' }}>Depression</option>
                                <option value="Medication Review" {{ old('visit_reason')=='Medication Review'?'selected':'' }}>Medication Review</option>
                                <option value="Other" {{ old('visit_reason')=='Other'?'selected':'' }}>Other</option>
                            </select>
                            @error('visit_reason')<p class="error">{{ $message }}</p>@enderror
                        </div>
                        <div class="md:col-span-2">
                            <input type="text" name="current_symptoms" value="{{ old('current_symptoms') }}" placeholder="Current Symptoms (optional)" class="input py-4">
                        </div>
                        <div class="md:col-span-2">
                            <input type="text" name="allergies" value="{{ old('allergies') }}" placeholder="Allergies (optional)" class="input py-4">
                        </div>
                        <div class="md:col-span-2">
                            <select name="past_psychiatric_history" class="input py-4">
                                <option value="">Past Psychiatric History (optional)</option>
                                <option value="None" {{ old('past_psychiatric_history')=='None'?'selected':'' }}>None</option>
                                <option value="Anxiety" {{ old('past_psychiatric_history')=='Anxiety'?'selected':'' }}>Anxiety</option>
                                <option value="Depression" {{ old('past_psychiatric_history')=='Depression'?'selected':'' }}>Depression</option>
                                <option value="Bipolar Disorder" {{ old('past_psychiatric_history')=='Bipolar Disorder'?'selected':'' }}>Bipolar Disorder</option>
                                <option value="Other" {{ old('past_psychiatric_history')=='Other'?'selected':'' }}>Other</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <textarea name="additional_notes" placeholder="Additional Notes (optional)" class="input py-4 h-32 resize-none">{{ old('additional_notes') }}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="w-full bg-navy text-white font-semibold py-4 rounded-xl hover:bg-sage transition shadow-lg">Confirm Appointment</button>
            </form>
        </div>
    </div>
</section>
@endsection