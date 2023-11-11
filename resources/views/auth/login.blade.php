@extends('layouts.app')
@section('title','Login Page')
@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="max-w-md m-auto p-4">
        <h1 class="text-4xl font-extrabold text-[#1c2434]">{{ $name }}</h1>
        <form action="{{ route('login') }}" method="post">
            @if (session('failed'))
            <x-alerts.failed :failed="session('failed')"  />
             @endif
            @csrf
            <x-input-field type="email" name="email" placeholder="Email Address" />
            @error('email')
            <x-alerts.error :$message />
            @enderror
            <x-input-field type="password" name="password" placeholder="Password" />
            @error('password')
            <x-alerts.error :$message />
            @enderror
            <div class="mt-4 ">
                <input class="focus:outline-none"  type="checkbox" id="remember">
                <label class="text-lg ml-2 cursor-pointer" for="remember">Remember me</label>
            </div>
            <div  class="flex items-center justify-center bg-[#1c2434] px-4 py-3 mt-5 mb-3 rounded-lg">
                <button class="flex items-center text-white font-bold text-lg" type="submit">Continue
                    <span><img src="https://api.iconify.design/formkit:arrowright.svg?color=%236b707b" width="20px"></span>
                </button>
            </div>
            <span class="flex items-center justify-center"><a class="underline text-red-500 " href="{{ route('forgot.password') }}">Forgot Password?</a></span>
            <p class="mt-5 mb-9 text-xl font-semibold text-[#cdcdcd]">Don't have an account?<a class="text-[#2d333d]" href="{{ route('signup') }}"> Create an account</a></p>
            <div class="flex items-center justify-center">
                <img src="https://eezepc.com/wp-content/uploads/2023/07/eezepc-logo-1.jpg" width="150px" alt="Ezepc Image">
            </div>
        </form>
    </div>
</div>
@endsection