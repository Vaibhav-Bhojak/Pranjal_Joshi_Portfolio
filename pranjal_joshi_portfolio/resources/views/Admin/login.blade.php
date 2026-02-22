@extends('layouts.app')

@section('title','Admin Login')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gray-50">
<div class="w-full max-w-md bg-white p-10 rounded-2xl shadow-xl border border-gray-100">

<h1 class="text-2xl font-bold text-navy text-center mb-6">Admin Login</h1>

@if($errors->any())
<div class="mb-4 text-red-600 text-sm text-center">
Invalid credentials. Please try again.
</div>
@endif

<form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-5">
@csrf

<input type="email" name="email" placeholder="Admin Email"
value="{{ old('email') }}"
class="w-full px-5 py-4 border rounded-xl focus:ring-2 focus:ring-sage focus:outline-none">

<input type="password" name="password" placeholder="Password"
class="w-full px-5 py-4 border rounded-xl focus:ring-2 focus:ring-sage focus:outline-none">

<button type="submit"
class="w-full bg-navy text-white py-4 rounded-xl font-semibold hover:bg-sage transition">
Login
</button>

</form>

</div>
</section>
@endsection