@extends('layouts.app')
@section('title','Login Page')
@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="max-w-md m-auto p-4">
        <h1 class="text-4xl font-extrabold text-[#1c2434]">{{ $name }}</h1>
        <p class="text-gray-400 mt-2">You will recieve an email after submiting your email!</p>
        <form action="{{ route('password.update') }}" method="post">
            @csrf
            <x-input-field type="hidden" name="token" value="{{ $token }}" />
            <x-input-field type="password" name="password" placeholder="New Password" />
            @error('password')
            <x-alerts.error :$message />
            @enderror
            <x-input-field type="password" name="password_confirmation" placeholder="Confirm Password" />
            @error('password_confirmation')
            <x-alerts.error :$message />
            @enderror
           
            <div  class="flex items-center justify-center bg-[#1c2434] px-4 py-3 mt-5 mb-3 rounded-lg">
                <button class="flex items-center text-white font-bold text-lg" type="submit">Reset Now
                    <span><img src="https://api.iconify.design/formkit:arrowright.svg?color=%236b707b" width="20px"></span>
                </button>
            </div>
            <div class="flex items-center justify-center">
                <img src="https://eezepc.com/wp-content/uploads/2023/07/eezepc-logo-1.jpg" width="150px" alt="Ezepc Image">
            </div>
        </form>
    </div>
</div>
@endsection