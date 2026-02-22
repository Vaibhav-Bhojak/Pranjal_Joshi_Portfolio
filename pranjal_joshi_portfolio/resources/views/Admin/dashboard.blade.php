@extends('layouts.admin.layout')

@section('title','Dashboard')
@section('header','Dashboard')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

<div class="bg-white p-6 rounded-2xl shadow border border-gray-100">
<p class="text-gray-500 text-sm">Total Appointments</p>
<p class="text-3xl font-bold text-navy mt-2">{{ $totalAppointments ?? 0 }}</p>
</div>

<div class="bg-white p-6 rounded-2xl shadow border border-gray-100">
<p class="text-gray-500 text-sm">Today’s Appointments</p>
<p class="text-3xl font-bold text-navy mt-2">{{ $todayAppointments ?? 0 }}</p>
</div>

<div class="bg-white p-6 rounded-2xl shadow border border-gray-100">
<p class="text-gray-500 text-sm">New Patients</p>
<p class="text-3xl font-bold text-navy mt-2">{{ $newPatients ?? 0 }}</p>
</div>

</div>

<div class="mt-10 bg-white rounded-2xl shadow border border-gray-100 p-8">

<h2 class="text-lg font-semibold text-navy mb-6">Recent Appointments</h2>

<div class="overflow-x-auto">
<table class="w-full text-sm">

<thead>
<tr class="text-left border-b">
<th class="py-3">Name</th>
<th>Date</th>
<th>Time</th>
<th>Type</th>
<th>Contact</th>
</tr>
</thead>

<tbody>
@forelse($recentAppointments ?? [] as $appointment)
<tr class="border-b hover:bg-gray-50">
<td class="py-3 font-medium">{{ $appointment->name }}</td>
<td>{{ $appointment->appointment_date }}</td>
<td>{{ $appointment->appointment_time }}</td>
<td>{{ $appointment->appointment_type }}</td>
<td>{{ $appointment->contact_mobile }}</td>
<td class="py-3">
<a href="{{ route('admin.show', $appointment->id) }}" class="text-sage hover:text-navy transition">
View Details
</a>
</td>
</tr>
@empty
<tr>
<td colspan="5" class="py-6 text-center text-gray-500">
No appointments found
</td>
</tr>
@endforelse
</tbody>

</table>
</div>

</div>

@endsection