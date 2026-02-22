@extends('layouts.app')
@section('title','Services | Dr. Pranjal Joshi')
@section('content')

<section class="bg-gradient-to-br from-gray-50 to-gray-100 py-16">
<div class="max-w-6xl mx-auto px-6">

<div class="text-center mb-14">
<h1 class="text-3xl font-bold text-navy">Mental Health Services</h1>
<p class="text-gray-500 mt-2">Professional, confidential, and personalized care</p>
</div>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:shadow-xl transition">
<h3 class="text-lg font-semibold text-navy mb-3">General Consultation</h3>
<p class="text-gray-600 leading-relaxed">
Initial assessment sessions focused on understanding emotional concerns, mental health history, and treatment planning.
</p>
</div>

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:shadow-xl transition">
<h3 class="text-lg font-semibold text-navy mb-3">Anxiety & Stress Therapy</h3>
<p class="text-gray-600 leading-relaxed">
Evidence-based techniques to manage anxiety, reduce stress, and build emotional resilience in daily life.
</p>
</div>

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:shadow-xl transition">
<h3 class="text-lg font-semibold text-navy mb-3">Depression Support</h3>
<p class="text-gray-600 leading-relaxed">
Structured therapeutic support to improve mood, motivation, and overall psychological well-being.
</p>
</div>

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:shadow-xl transition">
<h3 class="text-lg font-semibold text-navy mb-3">Behavioral Therapy</h3>
<p class="text-gray-600 leading-relaxed">
Practical strategies to identify patterns, change behaviors, and develop healthier coping mechanisms.
</p>
</div>

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:shadow-xl transition">
<h3 class="text-lg font-semibold text-navy mb-3">Follow-up Sessions</h3>
<p class="text-gray-600 leading-relaxed">
Progress tracking, treatment adjustments, and continued emotional support for long-term improvement.
</p>
</div>

<div class="bg-white rounded-2xl shadow-md border border-gray-100 p-8 hover:shadow-xl transition">
<h3 class="text-lg font-semibold text-navy mb-3">Mental Wellness Coaching</h3>
<p class="text-gray-600 leading-relaxed">
Guidance focused on personal growth, emotional balance, and maintaining mental wellness.
</p>
</div>

</div>

<div class="mt-16 bg-white rounded-2xl shadow-lg border border-gray-100 p-10 text-center">
<h2 class="text-2xl font-bold text-navy mb-3">Start Your Healing Journey</h2>
<p class="text-gray-600 mb-6">Book a confidential appointment at your convenience</p>
<a href="{{ route('admin.create') }}"
class="inline-block bg-navy text-white px-10 py-4 rounded-xl font-semibold hover:bg-sage transition shadow-lg">
Book Appointment
</a>
</div>

</div>
</section>

@endsection