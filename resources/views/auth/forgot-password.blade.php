@extends('layouts.app')
@section('title','Forgot Password')
@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="max-w-md m-auto p-4">
        <h1 class="text-3xl font-extrabold text-[#1c2434]">{{ $name }}</h1>
        <form action="{{ route('password.email') }}" method="post">
          <p class="text-gray-400 mt-2">You will recieve an email after submiting your email!</p>
            @csrf
            <x-input-field type="email" name="email" placeholder="Email Address" />
            @error('email')
            <x-alerts.error :$message />
            @enderror
         
            <div  class="flex items-center justify-center bg-[#1c2434] px-4 py-3 mt-5 rounded-lg mb-4">
                <button class="flex items-center text-white font-bold text-lg" type="submit">Reset 
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