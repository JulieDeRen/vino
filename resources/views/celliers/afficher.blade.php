@extends('layouts.app')
@section('content')


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
       <!-- Redirection vers modifier les infos du cellier -->
       <div class="text-center w-full">
        <a
          href="{{route('celliers.modifier', ['cellier' => $cellier->id])}}"
          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none"
        >
          Modifier les informations du cellier
        </a>
      </div>
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
  </div>git
{{-- ------- formulaire d'ajout de bouteilles ------------ --}}
  <div class="flex flex-col lg:flex-row h-screen items-center">
    <div class="bg-gray-900 lg:w-1/2">
      {{-- <div class="flex flex-col justify-center lg:h-screen">
        <img src="{{asset('img/form/red-wine.avif')}}"alt="" class="h-full w-full object-cover">
      </div> --}}
    </div>
    <div class="bg-white lg:w-1/2">
      <div class="container mx-auto py-16 px-8">
        <h2 class="text-4xl font-bold mb-8">Ajout de Bouteilles</h2>
        <p class="text-gray-700 mb-4">Veuillez remplir le formulaire suivant pour rentrer des bouteilles qui ne sont pas sur SAQ.</p>
        <form method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <section class="flex flex-wrap">
              <v-recherche />
          </section>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="nom_bouteille">
              Nom
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom_bouteille" name="nom_bouteille" type="text" placeholder="Nom du vin">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="quantite">
              Quantite
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantite" name="quantite" type="text" placeholder="Quantité de bouteilles à ajouter">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date_achat">
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="garde_jusqua" name="garde_jusqua" type="date" placeholder="Garde jusqu'à quand">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="prix">
              Prix
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prix" name="prix" type="number" placeholder="Prix payé">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="prix">
            Millésime
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="millesime" name="millesime" type="number" placeholder="Millésime">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-accent_wine hover:accent_wine-80 text-main font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
              Ajouter
              </button>
              </div>
              </form>
              </div>
              </div>
              </div>
    <section class="flex flex-wrap">
    <!-- Containeur principal -->
    <!-- <div class="flex justify-center px-4 py-16 max-w-screen-lg mx-auto md:px-24 lg:px-8 lg:py-20"> -->
    <div class="px-4 py-16 mx-auto flex justify-center sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-16 lg:px-8 lg:py-20">
      <!-- Grille composante -->
      
      <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

        @foreach($bouteilles as $bouteille)
        <!-- carte -->
        <div class="overflow-hidden  duration-300 flex flex-col gap-3 items-center max-w-[315px] bg-white rounded-lg max-h-55 p-4">
              <a href="/" aria-label="Article"><img src="{{ $bouteille->imageSAQ }}" class="object-cover max-h-[350px] rounded" alt="vine-img" /></a>
              <div class="text-center flex flex-col gap-2.5">
                <span class="font-semibold text-section_title">Cellier</span>
                <a href="/" aria-label="Article" class="inline-block text-article_title">
                  <p class="sm:text-2xl text-xl font-bold leading-6">{{ $bouteille->nomSAQ }}</p>
                </a>

          </div>
          <!-- ici va le compteur -->
          <v-compteur :nbbouteille="{{ $bouteille->quantiteBouteille }}" :id="{{ $bouteille->vino_bouteille_id }}"/>
        </div>
        <!-- fin carte --> 
        @endforeach

        </div>
      </div>

    </section>

    </div>
  </div>
</div>

@endsection