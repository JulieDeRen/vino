@extends('layouts.app')
@section('content')
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col w-full mb-6 lg:justify-between lg:flex-row md:mb-8">
    <div class="flex items-center mb-5 md:mb-6 group lg:max-w-xl">
      <quote class="font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl">
        <span class="inline-block mb-2">"Je boirai du lait<br class="hidden md:block" />
        quand les vaches brouteront du raisin." - Toulouse-Lautrec</span>
        <div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
      </quote>
    </div>
  </div>
  <div class="py-16 grid gap-8 row-gap-5 mb-8 lg:grid-cols-3 lg:row-gap-8">
    @foreach($celliers as $cellier)
    <div>
      <img class="object-cover w-full h-56 mb-6 rounded shadow-lg md:h-64 xl:h-80" src="img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg" alt="cellier à Malibu" />
        <h3 class="mb-2 text-3xl font-bold leading-none sm:text-2xl">
          {{$cellier->nom}}
        </h3>
        <p class="text-gray-700">
        {{$cellier->description ?? ''}}
        </p>
    @endforeach
    <div class="py-16">
      <div class="text-center">
        <a
          href="/creer-cellier"
          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
        >
          Ajouter un cellier
        </a>
    </div>
    </div>
  </div>
</div>

@endsection


