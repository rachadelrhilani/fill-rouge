<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'EmployeeFlow - Gestion RH')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#E2E8F0]">

    <x-navbar />

    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="py-6 text-center text-gray-500 text-sm mt-auto">
        &copy; {{ date('Y') }} EmployeeFlow. Tous droits réservés.
    </footer>

</body>
</html>