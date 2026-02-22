@extends('layouts.app')
@section('title','About Dr. Pranjal Joshi')
@section('content')

<section class="bg-gradient-to-br from-gray-50 to-gray-100 py-16 mt-10">
<div class="max-w-6xl mx-auto px-6">

<div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">

<div class="grid md:grid-cols-2 gap-0">

<div class="p-12 flex flex-col justify-center">
<h1 class="text-3xl font-bold text-navy mb-4">Dr. Pranjal Joshi</h1>
<p class="text-sage font-medium mb-6">Psychologist • Therapist • Educator • Facilitator • EAP Counsellor • NET qualified</p>
<p class="text-sage font-medium mb-6">Founder @Therapyandthrive_atmeraki</p>

<p class="text-gray-600 leading-relaxed mb-4">
Dr. Pranjal Joshi is a dynamic psychology professional and psycholinguist, skilled in clinical assessments, counseling, and psychoeducation. With extensive experience, including internships at Fortis Mental Health Care, VIMHANS  and Marudhar Hospital, I excel at client interaction and therapy. Freelance German language trainer with over four years of experience teaching since 2020, currently collaborating with The German Institute, Delhi. Skilled in psycholinguistics, clinical assessments, and counseling, I bring a unique blend of language expertise and psychological insight. Proficient in psychological tools like SPSS and conducting psychometric evaluations for diverse populations. Passionate about mental health, education, and fostering cross-cultural connections through language and psychology. Proven ability to deliver impactful results through research, content development, and training, enhancing learning experiences and promoting mental well-being

<p class="text-gray-600 leading-relaxed">
Her therapeutic style focuses on creating a safe, non-judgmental space where individuals feel heard, understood, and empowered to grow.
</p>
</div>

<div class="bg-gray-100 min-h-[380px] flex items-center justify-center">
<img src="/img/pranjalJosshi_enhanced.png" alt="Dr. Pranjal Joshi"
class="w-full h-full object-cover">
</div>

</div>
</div>

<div class="grid md:grid-cols-3 gap-8 mt-12">

<div class="bg-white p-8 rounded-xl shadow-md border border-gray-100">
<h3 class="text-lg font-semibold text-navy mb-3">Areas of Expertise</h3>
<ul class="text-gray-600 space-y-2">
<li>• Clinical SupervisionManagement</li>
<li>• Counseling</li>
<li>• German Teaching</li>
<li>• Psychological Testing</li>
<li>• Psychological Assessment</li>
</ul>
</div>

<div class="bg-white p-8 rounded-xl shadow-md border border-gray-100">
<h3 class="text-lg font-semibold text-navy mb-3">Therapy Approach</h3>
<p class="text-gray-600 leading-relaxed">
Dr. Joshi integrates evidence-based psychological practices with a personalized care approach. Each treatment plan is tailored to the individual’s needs, ensuring practical and sustainable progress.
</p>
</div>

<div class="bg-white p-8 rounded-xl shadow-md border border-gray-100">
<h3 class="text-lg font-semibold text-navy mb-3">Patient Commitment</h3>
<p class="text-gray-600 leading-relaxed">
Confidentiality, empathy, and professional care form the foundation of every session. The goal is not only treatment but long-term emotional well-being.
</p>
</div>

</div>

<div class="text-center mt-14">
<a href="{{ route('admin.create') }}"
class="inline-block bg-navy text-white px-10 py-4 rounded-xl font-semibold hover:bg-sage transition shadow-lg">
Book an Appointment
</a>
</div>

</div>
</section>

@endsection