@extends('layouts.app')
@section('title','Contact | Dr. Pranjal Joshi')
@section('content')

<section class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 mt-10">
<div class="max-w-5xl mx-auto px-6">

<div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-10 text-center">
<h1 class="text-3xl font-bold text-navy mb-2">Contact Information</h1>
<p class="text-gray-500">Reach out for appointments or inquiries</p>
</div>

<div class="grid md:grid-cols-3 gap-8 mt-10">

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8">
<h3 class="text-lg font-semibold text-navy mb-3">Clinic Address</h3>
<p class="text-gray-600 leading-relaxed">
123 Wellness Street<br>
Your City, State<br>
India
</p>
</div>

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8">
<h3 class="text-lg font-semibold text-navy mb-3">Phone</h3>
<p class="text-gray-600">+91 00000 00000</p>
<p class="text-gray-500 text-sm mt-2">Available Mon–Sat, 10 AM – 6 PM</p>
</div>

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8">
<h3 class="text-lg font-semibold text-navy mb-3">Email</h3>
<p class="text-gray-600">contact@example.com</p>
<p class="text-gray-500 text-sm mt-2">Response within 24 hours</p>
</div>

</div>

<div class="mt-14 bg-white rounded-2xl shadow-lg border border-gray-100 p-10 text-center">
<h2 class="text-2xl font-bold text-navy mb-3">Book a Session</h2>
<p class="text-gray-600 mb-6">Appointments are available by prior booking only</p>
<a href="{{ route('admin.create') }}"
class="inline-block bg-navy text-white px-10 py-4 rounded-xl font-semibold hover:bg-sage transition shadow-lg">
Book Appointment
</a>
</div>

</div>
</section>

@endsection