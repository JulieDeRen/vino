@extends('layouts.app')
@section('content')



<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <button></button>
    <div class="rounded-full cursor-pointer py-5 px-5 bg-accent_wine mr-3 hover:bg-accent_wine-80"></div>
    <div class="rounded-full cursor-pointer py-5 px-5 bg-secondary mr-3 hover:bg-secondary-80"></div>
</div>

<div class="container mx-auto">
  <div class="flex justify-center">
    <div class="w-full max-w-md">
      <div class="bg-white rounded-lg overflow-hidden">
        <div class="px-6 py-4">
          <h2 class="text-center text-accent_wine text-2xl mb-4">{{ __('Connection') }}</h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <input id="courriel" type="email" placeholder="{{ __('Email Address') }}" class="shadow appearance-none border rounded w-full py-3 px-3 text-text_primary leading-tight focus:outline-none focus:shadow-outline border-primary @error('courriel') border-red-500 @enderror" name="courriel" value="{{ old('courriel') }}" required autocomplete="courriel" autofocus>
              @error('courriel')
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



<!-- Containeur principal -->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">

<!-- Grille composante -->
  <div class="grid gap-5 lg:grid-cols-4 sm:max-w-sm sm:mx-auto lg:max-w-full">

    <!-- carte -->
    <div class="overflow-hidden border border-accent_wine duration-300 flex flex-col gap-3 items-center max-w-[315px] bg-white rounded-lg max-h-55 p-4">
      <a href="/" aria-label="Article"><img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover max-h-[350px] rounded" alt="vine-img" /></a>
      <div class="text-center flex flex-col gap-2.5">
        <span class="font-semibold text-section_title">Cellier</span>
        <a href="/" aria-label="Article" class="inline-block text-article_title">
          <p class="sm:text-2xl text-xl font-bold leading-6">André Rohrer Stein Riesling</p>
        </a>
        <!-- ici va la note avec qty -->

      </div>
      <!-- ici va le compteur -->
      <div class="flex flex-col items-center py-3">
        <div class="inline-flex items-center">
          <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </button>
          <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"> 2
          </div>
          <button class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- fin carte -->
    <!-- carte -->
    <div class="overflow-hidden border border-accent_wine duration-300 flex flex-col gap-3 items-center max-w-[315px] bg-white rounded-lg max-h-55 p-4">
      <a href="/" aria-label="Article"><img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover max-h-[350px] rounded" alt="vine-img" /></a>
      <div class="text-center flex flex-col gap-2.5">
        <span class="font-semibold text-section_title">Cellier</span>
        <a href="/" aria-label="Article" class="inline-block text-article_title">
          <p class="sm:text-2xl text-xl font-bold leading-6">André Rohrer Stein Riesling</p>
        </a>
        <!-- ici va la note avec qty -->

      </div>
      <!-- ici va le compteur -->
      <div class="flex flex-col items-center py-3">
        <div class="inline-flex items-center">
          <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </button>
          <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"> 2
          </div>
          <button class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- fin carte -->
    <!-- carte -->
    <div class="overflow-hidden border border-accent_wine duration-300 flex flex-col gap-3 items-center max-w-[315px] bg-white rounded-lg max-h-55 p-4">
      <a href="/" aria-label="Article"><img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover max-h-[350px] rounded" alt="vine-img" /></a>
      <div class="text-center flex flex-col gap-2.5">
        <span class="font-semibold text-section_title">Cellier</span>
        <a href="/" aria-label="Article" class="inline-block text-article_title">
          <p class="sm:text-2xl text-xl font-bold leading-6">André Rohrer Stein Riesling</p>
        </a>
        <!-- ici va la note avec qty -->

      </div>
      <!-- ici va le compteur -->
      <div class="flex flex-col items-center py-3">
        <div class="inline-flex items-center">
          <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </button>
          <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"> 2
          </div>
          <button class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- fin carte -->
    <!-- carte -->
    <div class="overflow-hidden border border-accent_wine duration-300 flex flex-col gap-3 items-center max-w-[315px] bg-white rounded-lg max-h-55 p-4">
      <a href="/" aria-label="Article"><img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover max-h-[350px] rounded" alt="vine-img" /></a>
      <div class="text-center flex flex-col gap-2.5">
        <span class="font-semibold text-section_title">Cellier</span>
        <a href="/" aria-label="Article" class="inline-block text-article_title">
          <p class="sm:text-2xl text-xl font-bold leading-6">André Rohrer Stein Riesling</p>
        </a>
        <!-- ici va la note avec qty -->

      </div>
      <!-- ici va le compteur -->
      <div class="flex flex-col items-center py-3">
        <div class="inline-flex items-center">
          <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </button>
          <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"> 2
          </div>
          <button class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- fin carte -->
    <!-- carte -->
    <div class="overflow-hidden border border-accent_wine duration-300 flex flex-col gap-3 items-center max-w-[315px] bg-white rounded-lg max-h-55 p-4">
      <a href="/" aria-label="Article"><img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover max-h-[350px] rounded" alt="vine-img" /></a>
      <div class="text-center flex flex-col gap-2.5">
        <span class="font-semibold text-section_title">Cellier</span>
        <a href="/" aria-label="Article" class="inline-block text-article_title">
          <p class="sm:text-2xl text-xl font-bold leading-6">André Rohrer Stein Riesling</p>
        </a>
        <!-- ici va la note avec qty -->

      </div>
      <!-- ici va le compteur -->
      <div class="flex flex-col items-center py-3">
        <div class="inline-flex items-center">
          <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </button>
          <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"> 2
          </div>
          <button class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- fin carte -->
  </div>
</div>

@endsection







