@extends('layouts.app')
@section('content')
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="py-16 grid gap-8 row-gap-5 mb-8 lg:grid-cols-3 lg:row-gap-8">
    <div onclick="location.href=`{{route('celliers.afficher', $cellier->id)}}`">
      <!--<img class="object-cover w-full h-56 mb-6 rounded shadow-lg md:h-64 xl:h-80" src="/{{$cellier->image}}" alt="{{$cellier->nom}}" />-->
        <h3 class="mb-2 text-3xl font-bold leading-none sm:text-2xl">
          {{$cellier->nom}}
        </h3>
        <p class="text-gray-700">
        {{$cellier->description ?? ''}}
        </p>
    </div>
  </div>

    <section class="flex flex-wrap">
        @foreach($bouteilles as $bouteille)
            <div class="block border border-green-500 max-w-md:">
                <img class="" src="{{ $bouteille->imageSAQ }}" alt="cellier à Malibu" width="200" />
                <h3 class="mb-2 text-3xl font-bold leading-none sm:text-2xl">
                {{ $bouteille->nomSAQ }}
                </h3>
                <p class="text-gray-700">
                ${{ $bouteille->prixPaye }}
                </p>
            </div>
        @endforeach
    </section>

    <div class="py-16">
      <div class="text-center">
        <a
          href="{{route('celliers.modifier', ['cellier' => $cellier->id])}}"
          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md border border-accent_wine hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none"
        >
          Modifier les informations du cellier
        </a>
      </div>
    </div>
    <div class="text-center">
      <a
        href="{{route('celliers.ajouterBouteille', ['cellier' => $cellier->id])}}"
        class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md border border-accent_wine hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none"
      >
        Ajouter des bouteilles
      </a>
    </div>
    </div>
  </div>
</div>

@endsection