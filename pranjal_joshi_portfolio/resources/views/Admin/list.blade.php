@extends('layouts.admin.layout')

@section('title','Appointments')
@section('header','Appointments List')

@section('content')

<div class="space-y-6">

@if(session('success'))
<div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl">
{{ session('success') }}
</div>
@endif

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

<form method="GET" class="flex flex-wrap gap-4 items-center justify-between">

<div class="flex gap-4 items-center">

<select name="status"
class="px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-sage">

<option value="">All Status</option>
<option value="1" {{ request('status')=='1' ? 'selected' : '' }}>Pending</option>
<option value="2" {{ request('status')=='2' ? 'selected' : '' }}>Confirmed</option>
<option value="3" {{ request('status')=='3' ? 'selected' : '' }}>Completed</option>
<option value="4" {{ request('status')=='4' ? 'selected' : '' }}>Cancelled</option>

</select>

<button class="bg-navy text-white px-5 py-3 rounded-xl hover:bg-sage transition">
Filter
</button>

</div>

<a href="{{ route('admin.index') }}"
class="text-sm text-gray-500 hover:text-navy">
Reset
</a>

</form>

</div>

<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">

<table class="w-full text-sm">

<thead class="bg-gray-50 text-gray-600">
<tr>
<th class="text-left px-6 py-4">Patient</th>
<th class="text-left px-6 py-4">Contact</th>
<th class="text-left px-6 py-4">Date</th>
<th class="text-left px-6 py-4">Time</th>
<th class="text-left px-6 py-4">Type</th>
<th class="text-left px-6 py-4">Status</th>
<th class="text-left px-6 py-4">Action</th>
</tr>
</thead>

<tbody class="divide-y divide-gray-100">

@forelse($appointments as $appointment)

<tr class="hover:bg-gray-50">

<td class="px-6 py-4">
<div class="font-semibold text-navy">{{ $appointment->name }}</div>
<div class="text-gray-400 text-xs">{{ $appointment->email }}</div>
</td>

<td class="px-6 py-4">{{ $appointment->contact_mobile }}</td>

<td class="px-6 py-4">
{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d M Y') }}
</td>

<td class="px-6 py-4">{{ $appointment->appointment_time }}</td>

<td class="px-6 py-4">{{ $appointment->appointment_type }}</td>

<td class="px-6 py-4">

<span class="px-3 py-1 text-xs font-semibold rounded-full
@if($appointment->status==1) bg-yellow-100 text-yellow-700
@elseif($appointment->status==2) bg-blue-100 text-blue-700
@elseif($appointment->status==3) bg-green-100 text-green-700
@elseif($appointment->status==4) bg-red-100 text-red-700
@endif">

@if($appointment->status==1) Pending
@elseif($appointment->status==2) Confirmed
@elseif($appointment->status==3) Completed
@elseif($appointment->status==4) Cancelled
@endif

</span>

</td>

<td class="px-6 py-4">

<a href="{{ route('admin.show',$appointment->id) }}"
class="text-navy font-medium hover:text-sage">
Update
</a>

</td>

</tr>

@empty

<tr>
<td colspan="7" class="text-center py-10 text-gray-400">
No appointments found
</td>
</tr>

@endforelse

</tbody>

</table>

</div>

<div>
{{ $appointments->links() }}
</div>

</div>

@endsection