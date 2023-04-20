@extends('layouts.app')
@section('content')

<div class="container mb-3 mx-auto">
  <div class="min-h-[500px] container flex justify-center items-center ">
    <div class="bg-white rounded-lg overflow-hidden max-w-[400px] w-full">
      <div class="px-6 mb-5">

        <h2 class="text-center text-accent_wine text-2xl mb-5">{{ __('Connexion') }}</h2>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-4">
            <!-- <v-recherche /> -->
            <input id="courriel" type="email" placeholder="{{ __('Courriel') }}" class="appearance-none placeholder-section_title border rounded w-full py-3 px-3 text-accent_wine leading-tight focus:outline-none border-accent_wine @error('courriel') border-red-500 @enderror" name="courriel" value="{{ old('courriel') }}" required autocomplete="courriel" autofocus>
            @error('courriel')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4">

            <input id="password" type="password" placeholder="{{ __('Mot de passe') }}" class="placeholder-section_title  appearance-none border rounded w-full py-3 px-3 text-accent_wine leading-tight focus:outline-none border-accent_wine @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
            @enderror
          </div>
          <div class="mb-4 flex justify-between items-center">
            <div>
              <input type="checkbox" class="form-checkbox h-4 w-4 text-section_title" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="ml-2 text-section_title text-sm hover:text-accent_wine" for="remember">
                {{ __('Se souvenir de moi') }}
              </label>

            </div>
            @if (Route::has('password.request'))
            <a class="ml-5 inline-block align-baseline text-sm text-accent_wine hover:text-section_title " href="{{ route('password.request') }}">
              {{ __('Le mot de passe oublié?') }}
            </a>
            @endif
          </div>
          <div class="text-center">
            <button type="submit" class="bg-accent_wine space-x-1 font-normal border text-main hover:border-accent_wine hover:bg-transparent hover:text-accent_wine py-2 px-5 uppercase rounded focus:outline-none">

              {{ __('Connexion') }}
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection