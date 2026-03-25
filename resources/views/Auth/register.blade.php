@extends('layouts.public')

@section('title', 'Inscription | EmployeeFlow')

@section('content')
<div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between min-h-[80vh] gap-12">

    <div class="w-full md:w-[450px] bg-white rounded-[40px] shadow-sm p-10">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-[#1e3a8a]">Sign Up</h1>
        </div>

        <div class="flex gap-4 mb-8">
            <button class="flex-1 flex items-center justify-center gap-2 py-2.5 border border-gray-100 rounded-xl bg-[#f8fafc] hover:bg-gray-50 transition">
                <img src="https://www.svgrepo.com/show/475656/google.svg" class="w-5 h-5" alt="Google">
                <span class="text-xs font-medium text-gray-600">Google</span>
            </button>
            <button class="flex-1 flex items-center justify-center gap-2 py-2.5 border border-gray-100 rounded-xl bg-[#f8fafc] hover:bg-gray-50 transition">
                <img src="https://www.svgrepo.com/show/512317/github-142.svg" class="w-5 h-5" alt="Github">
                <span class="text-xs font-medium text-gray-600">Github</span>
            </button>
        </div>

        <form action="#" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1 ml-1">Nom complet</label>
                <input type="text" name="name" placeholder="John Doe"
                    class="w-full px-5 py-3 bg-[#f3f4f6] border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 transition outline-none">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1 ml-1">Email Address</label>
                <input type="email" name="email" placeholder="example@gmail.com"
                    class="w-full px-5 py-3 bg-[#f3f4f6] border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 transition outline-none">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1 ml-1">Nom d'entreprise</label>
                <input type="text" name="company" placeholder="Nom de votre société"
                    class="w-full px-5 py-3 bg-[#f3f4f6] border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 transition outline-none">
            </div>

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1 ml-1">Password</label>
                <input type="password" name="password" placeholder="********"
                    class="w-full px-5 py-3 bg-[#f3f4f6] border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 transition outline-none">
            </div>
            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-1 ml-1">Confirm</label>
                <input type="password" name="password_confirmation" placeholder="********"
                    class="w-full px-5 py-3 bg-[#f3f4f6] border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 transition outline-none">
            </div>


            <button type="submit" class="w-full py-4 bg-[#6366f1] hover:bg-indigo-700 text-white rounded-2xl font-bold text-sm shadow-lg shadow-indigo-200 transition-all mt-6">
                Create account
            </button>

            <p class="text-center text-xs text-gray-500 mt-6">
                Already have an account? <a href="#" class="text-blue-600 font-bold hover:underline">Log in</a>
            </p>
        </form>
    </div>

    <div class="hidden md:block flex-1">
        <img src="{{ asset('images/illustration.png') }}" alt="Illustration Travail" class="w-full h-auto transform scale-110">
    </div>
</div>
@endsection