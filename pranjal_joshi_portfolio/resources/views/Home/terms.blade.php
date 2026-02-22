@extends('layouts.app')
@section('title','Terms of Service | Dr. Pranjal Joshi')
@section('content')

<section class="bg-gradient-to-br from-gray-50 to-gray-100 py-16">
<div class="max-w-4xl mx-auto px-6">

<div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-10">
<h1 class="text-3xl font-bold text-navy mb-6 text-center">Terms of Service</h1>

<div class="space-y-6 text-gray-700 leading-relaxed">

<p>
By accessing this website or booking an appointment, you agree to the following terms and conditions. Please read them carefully before using our services.
</p>

<h2 class="text-lg font-semibold text-navy">Use of Services</h2>
<p>
Appointments are provided for professional mental health consultation and support. Information shared during sessions should be accurate and truthful to ensure appropriate care.
</p>

<h2 class="text-lg font-semibold text-navy">Appointments & Scheduling</h2>
<ul class="list-disc list-inside space-y-1">
<li>Appointments are confirmed only after approval.</li>
<li>Please arrive on time for scheduled sessions.</li>
<li>Rescheduling or cancellation should be done in advance.</li>
</ul>

<h2 class="text-lg font-semibold text-navy">Confidentiality</h2>
<p>
All personal and clinical information is treated as confidential and handled in accordance with professional and legal standards.
</p>

<h2 class="text-lg font-semibold text-navy">Limitation of Liability</h2>
<p>
Services provided are professional consultations intended for support and guidance. They do not replace emergency medical or psychiatric care.
</p>

<h2 class="text-lg font-semibold text-navy">User Responsibilities</h2>
<ul class="list-disc list-inside space-y-1">
<li>Provide accurate personal and contact information.</li>
<li>Use the website respectfully and lawfully.</li>
<li>Follow appointment policies and professional guidelines.</li>
</ul>

<h2 class="text-lg font-semibold text-navy">Changes to Terms</h2>
<p>
These terms may be updated periodically. Continued use of the website or services indicates acceptance of any changes.
</p>

<h2 class="text-lg font-semibold text-navy">Contact</h2>
<p>
For questions regarding these terms, please contact the clinic through the contact information provided on the website.
</p>

<p class="text-sm text-gray-500 pt-4 border-t">
Last updated: {{ date('F Y') }}
</p>

</div>
</div>

</div>
</section>

@endsection