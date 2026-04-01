@extends('layouts.public')

@section('title', 'Connexion | HRFlow')

@section('content')
<div class="max-w-6xl mx-auto mt-4 flex flex-col md:flex-row items-center justify-between min-h-[80vh] gap-12 font-body">
    
    <div class="w-full md:w-[450px] bg-white rounded-[40px] shadow-sm p-12">
        <div class="text-center mb-10">
            <h1 class="font-display text-2xl font-bold text-gray-800">Log in</h1>
        </div>

        <div class="flex gap-4 mb-8 font-display">
            <button class="flex-1 flex items-center justify-center gap-2 py-2.5 border border-gray-100 rounded-xl bg-[#f8fafc] hover:bg-gray-50 transition">
                <img src="https://www.svgrepo.com/show/475656/google.svg" class="w-5 h-5" alt="Google">
                <span class="text-xs font-medium text-gray-600">Google</span>
            </button>
            <button class="flex-1 flex items-center justify-center gap-2 py-2.5 border border-gray-100 rounded-xl bg-[#f8fafc] hover:bg-gray-50 transition">
                <img src="https://www.svgrepo.com/show/512317/github-142.svg" class="w-5 h-5" alt="Github">
                <span class="text-xs font-medium text-gray-600">Github</span>
            </button>
        </div>

        <form action="{{ route('login.post') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-xs font-semibold text-gray-700 mb-2 ml-1">Email Address</label>
                <input type="email" name="email" placeholder="example@gmail.com" value="{{ old('email') }}"
                    class="w-full px-5 py-4 bg-[#f3f4f6] border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 transition outline-none" required>
                @error('email')
                    <span class="text-[10px] text-red-500 mt-1 ml-2">{{ $message }}</span>
                @enderror
            </div>

            <div class="relative">
                <label class="block text-xs font-semibold text-gray-700 mb-2 ml-1">Password</label>
                <input type="password" name="password" placeholder="********"
                    class="w-full px-5 py-4 bg-[#f3f4f6] border-none rounded-2xl text-sm focus:ring-2 focus:ring-blue-500 transition outline-none" required>
                
                <div class="flex justify-end mt-2">
                    <a href="#" class="text-[10px] font-medium text-blue-600 hover:underline">Forgot Password?</a>
                </div>
            </div>

            <div class="flex items-center ml-1">
                <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="remember" class="ml-2 text-xs text-gray-500 font-medium">Remember me</label>
            </div>

            <button type="submit" class="font-display w-full py-4 bg-[#6366f1] hover:bg-indigo-700 text-white rounded-2xl font-bold text-sm shadow-lg shadow-indigo-100 transition-all transform hover:-translate-y-0.5 mt-4">
                Log in
            </button>

            <p class="text-center text-xs text-gray-500 mt-8">
                Don't have account yet? 
                <a href="{{ route('register') }}" class="font-display text-blue-600 font-bold hover:underline ml-1">New Account</a>
            </p>
        </form>
    </div>

    <div class="hidden md:block flex-1 flex justify-center">
        <img src="{{ asset('images/illustration-login.png') }}" alt="HRFlow Illustration" class="max-w-[120%] h-auto">
    </div>
</div>
@endsection