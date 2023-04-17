@extends('layouts.app')

@section('content')
<div class="container mx-auto">
  <div class="flex justify-center">
    <div class="w-full max-w-md">
      <div class="bg-white rounded-lg overflow-hidden">
        <div class="px-6 py-4">
          <h2 class="text-center text-accent_wine text-2xl mb-4">{{ __('Inscription') }}</h2>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
              <input id="name" type="text" placeholder="{{ __('Nom') }}" class="shadow appearance-none border rounded w-full py-3 px-3 text-text_primary leading-tight focus:outline-none focus:shadow-outline border-primary @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              @error('name')
              <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3">
              <input id="email" type="email" placeholder="{{ __('Email Address') }}" class="shadow appearance-none border rounded w-full py-3 px-3 text-text_primary leading-tight focus:outline-none focus:shadow-outline border-primary @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
              <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-3">
              <input id="password" type="password" placeholder="{{ __('Password') }}" class="shadow appearance-none border rounded w-full py-3 px-3 text-text_primary leading-tight focus:outline-none focus:shadow-outline border-primary @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
              @error('password')
              <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4">
              <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}" class="shadow appearance-none border rounded w-full py-3 px-3 text-text_primary leading-tight focus:outline-none focus:shadow-outline border-primary" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="text-center">
              <button type="submit" class="border border-primary text-accent_wine hover:bg-primary hover:text-main py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Inscription') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
