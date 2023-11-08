@extends('layouts.app')
@section('title','Signup Page')
@section('content')
    <div class="max-w-md m-auto p-4 mt-2">
        <h1 class="text-4xl font-extrabold text-[#1c2434]">{{ $name }}</h1>
        <form action="{{ route('signup') }}" method="post">
            @if (session('success'))
            <x-alerts.success :success="session('success')"  />
             @endif
            @csrf
            <x-input-field type="text" name="name" placeholder="Name" />
            @error('name')
            <x-alerts.error :$message />
            @enderror
            <x-input-field type="email" name="email" placeholder="Email Address" />
            @error('email')
            <x-alerts.error :$message />
            @enderror
            <x-input-field type="password" name="password" placeholder="New Password" />
            @error('password')
            <x-alerts.error :$message />
            @enderror
            <x-input-field type="password" name="password_confirmation" placeholder="Confirm Password" />
            @error('password_confirmation')
            <x-alerts.error :$message />
            @enderror
            <div class="mt-4 ">
                <input  type="checkbox" id="privacy">
                <label class="text-lg ml-2 cursor-pointer" for="privacy">I agree to the <u class="text-[#1c2434] font-bold">Terms and Conditions</u> &<br> <u class="text-[#1c2434] font-bold">Privacy Policy</u></label>
            </div>
            <div  class="flex items-center justify-center bg-[#1c2434] px-4 py-3 mt-5 rounded-lg">
                <button class="flex items-center text-white font-bold text-lg" type="submit">Continue
                    <span><img src="https://api.iconify.design/formkit:arrowright.svg?color=%236b707b" width="20px"></span>
                </button>
            </div>
            <p class="mt-5 text-xl font-semibold text-[#cdcdcd]">Already have an account?<a class="text-[#2d333d]" href="{{ route('login') }}"> Sign in</a></p>
            <div class="flex items-center justify-center mt-5">
                <img src="https://eezepc.com/wp-content/uploads/2023/07/eezepc-logo-1.jpg" width="150px" alt="Ezepc Image">
            </div>
        </form>
    </div>



@endsection