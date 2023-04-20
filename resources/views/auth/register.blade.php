@extends('layouts.app')

@section('content')

<div class="container mb-3 mx-auto">
  <div class="min-h-[500px] container flex justify-center items-center">
    <div class="bg-white rounded-lg overflow-hidden max-w-[400px] w-full">
      <div class="px-6 mb-5">
        <h2 class="text-center text-accent_wine text-2xl mb-5">{{ __('Inscription') }}</h2>
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="mb-4">
            <input id="name" type="text" placeholder="{{ __('Nom') }}" class="appearance-none border rounded w-full py-3 px-3 text-accent_wine leading-tight focus:outline-none border-accent_wine @error('name') border-red-500 @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4">
            <input id="courriel" type="email" placeholder="{{ __('Courriel') }}" class="appearance-none border rounded w-full py-3 px-3 text-accent_wine leading-tight focus:outline-none border-accent_wine @error('courriel') border-red-500 @enderror" name="courriel" value="{{ old('courriel') }}" required autocomplete="courriel">
            @error('courriel')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4">
            <input id="password" type="password" placeholder="{{ __('Mot de passe') }}" class="appearance-none border rounded w-full py-3 px-3 text-accent_wine leading-tight focus:outline-none border-accent_wine @error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-5">
            <input id="password-confirm" type="password" placeholder="{{ __('Mod de passe confirmé') }}" class="appearance-none border rounded w-full py-3 px-3 text-accent_wine leading-tight focus:outline-none border-accent_wine" name="password_confirmation" required autocomplete="new-password">
          </div>
          <div class="text-center">
            <button type="submit" class="bg-accent_wine space-x-1 font-normal border text-main hover:border-accent_wine hover:bg-transparent hover:text-accent_wine py-2 px-5 uppercase rounded focus:outline-none">
              {{ __('Inscription') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



@endsection