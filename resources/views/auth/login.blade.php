@extends('layouts.app')
@section('content')
<div class="container mx-auto">
  <div class="flex justify-center">
    <div class="w-full max-w-md">
      <div class="bg-white rounded-lg overflow-hidden">
        <div class="px-6 py-4">
          <h2 class="text-center text-accent_wine text-2xl mb-4">{{ __('Connection') }}</h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
        
              <input id="email" type="email" placeholder="{{ __('Email Address') }}" class="shadow appearance-none border rounded w-full py-3 px-3 text-text_primary leading-tight focus:outline-none focus:shadow-outline border-primary @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4">
              
              <input id="password" type="password" placeholder="{{ __('Password') }}" class="shadow appearance-none border rounded w-full py-3 px-3 text-text_primary leading-tight focus:outline-none focus:shadow-outline border-primary @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
              @error('password')
              <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4 flex justify-between items-center">
            <div>
              <input class="mr-2 leading-tight border border-accent_wine focus:outline-none focus:ring-accent_wine" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="text-accent_wine" for="remember">
                {{ __('Se souvenir de moi') }}
              </label>
            </div>
            @if (Route::has('password.request'))
              <a class="inline-block align-baseline text-sm text-accent_wine hover:text-gray-500" href="{{ route('password.request') }}">
                {{ __('Le mot de passe oublié?') }}
              </a>
              @endif
              </div>
            <div class="text-center">
                <button type="submit" class="border border-primary text-accent_wine hover:bg-primary hover:text-main py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        {{ __('Connection') }}
                </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection