@extends('layouts.app')
@section('title','Disclaimer | Dr. Pranjal Joshi')
@section('content')

<section class="bg-gradient-to-br from-gray-50 to-gray-100 py-16">
<div class="max-w-4xl mx-auto px-6">

<div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-10">
<h1 class="text-3xl font-bold text-navy mb-6 text-center">Disclaimer</h1>

<div class="space-y-6 text-gray-700 leading-relaxed">

<p>
The information provided on this website is for general informational and educational purposes only. It is not intended to substitute professional psychological, psychiatric, or medical advice, diagnosis, or treatment.
</p>

<h2 class="text-lg font-semibold text-navy">No Medical Emergency Service</h2>
<p>
This website does not provide emergency mental health services. If you are experiencing a medical or psychological emergency, please contact local emergency services or seek immediate professional care.
</p>

<h2 class="text-lg font-semibold text-navy">Professional Relationship</h2>
<p>
Submitting a form or contacting the clinic through this website does not establish a therapist–patient relationship until an appointment is confirmed and services are formally initiated.
</p>

<h2 class="text-lg font-semibold text-navy">Accuracy of Information</h2>
<p>
While reasonable efforts are made to keep the information accurate and up to date, no guarantees are made regarding completeness, reliability, or suitability of the content for any specific purpose.
</p>

<h2 class="text-lg font-semibold text-navy">External Links</h2>
<p>
This website may contain links to external resources. The clinic is not responsible for the content, privacy practices, or reliability of third-party websites.
</p>

<h2 class="text-lg font-semibold text-navy">Limitation of Liability</h2>
<p>
Use of this website and reliance on any information provided is solely at your own risk. The clinic shall not be liable for any loss or damage arising from the use of this website or its content.
</p>

<h2 class="text-lg font-semibold text-navy">Consent</h2>
<p>
By using this website, you acknowledge and agree to this disclaimer and its terms.
</p>

<p class="text-sm text-gray-500 pt-4 border-t">
Last updated: {{ date('F Y') }}
</p>

</div>
</div>

</div>
</section>

@endsection