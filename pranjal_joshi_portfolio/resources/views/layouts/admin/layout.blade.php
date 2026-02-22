<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title','Admin Panel')</title>

<script src="https://cdn.tailwindcss.com"></script>

<script>
tailwind.config = {
theme: {
extend: {
colors: {
navy: '#1e293b',
sage: '#6b8e7f',
bgalt: '#f8fafc'
}
}
}
}
</script>

</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

<aside class="w-64 bg-navy text-white flex flex-col">
<a href="#" class="p-2 font-heading text-2xl font-semibold text-white flex items-center gap-3 group">
        Dr. Pranjal Joshi
      </a>
<div class="p-6 text-xl font-bold border-b border-white/10">
Admin Panel
</div>

<nav class="flex-1 p-4 space-y-2 text-sm">

<a href="{{ route('admin.dashboard') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
Dashboard
</a>

<a href="{{ route('admin.create') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
New Appointment
</a>

<a href="{{ route('admin.list') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
Appointments List
</a>

<a href="{{ route('home.index') }}" class="block px-4 py-3 rounded-lg hover:bg-white/10 transition">
View Website
</a>

</nav>

<div class="p-4 border-t border-white/10">
    <div class="flex items-center gap-3">

        <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center text-lg font-semibold">
            {{ strtoupper(substr(Auth::user()->name ?? 'A',0,1)) }}
        </div>

        <div class="flex-1">
            <p class="text-sm font-semibold leading-none">
                {{ Auth::user()->name ?? 'Admin' }}
            </p>
            <p class="text-xs text-gray-300">
                {{ Auth::user()->email ?? 'admin@clinic.com' }}
            </p>
        </div>

    </div>

    <form method="POST" action="{{ route('admin.logout') }}" class="mt-4">
        @csrf
        <button type="submit"
        class="w-full text-sm bg-white/10 hover:bg-white/20 transition px-4 py-2 rounded-lg">
            Logout
        </button>
    </form>
</div>

<div class="p-4 border-t border-white/10 text-xs text-gray-300">
© {{ date('Y') }} Clinic Admin
</div>

</aside>

<div class="flex-1 flex flex-col">

<header class="bg-white shadow-sm px-8 py-5 flex justify-between items-center">
<h1 class="text-xl font-semibold text-navy">@yield('header')</h1>
<div class="text-sm text-gray-500">Welcome, Admin</div>
</header>

<main class="p-10">
@yield('content')
</main>

</div>

</div>

</body>
</html>