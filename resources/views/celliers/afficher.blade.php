@extends('layouts.app')
@section('content')

<div class="container mx-auto py-8 px-8 sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
       <!-- Redirection vers modifier les infos du cellier -->
       <div>
       <div class="text-center w-full">
        <a  href="{{route('celliers.modifier', $cellier->id)}}" class="inline-flex items-center justify-center space-x-2 py-3 px-4 bg-accent_wine hover:accent_wine-80 text-main font-bold ml-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div><span class="ml-2 py-8"></span>Modifier cellier</div>
        </a>
      </div>
  <div class="py-4 mt-6">
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
  <div>
      <!-- Form d'ajout de bouteilles dans ce cellier-->
      <form method="post" enctype="multipart/form-data">
          <!--passer la méthode PUT et aussi le token expired réémission du token-->
          @csrf
          @method('PUT')
          <div class="w-full">
            <h2 class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nom">
              Ajouter une bouteille
            </h2>
          </div>
          <section class="flex flex-wrap border-b-2 pb-6 border-accent_wine">
            <div class="w-1/2 flex">
              <v-recherche />
            </div>
            <div class="w-1/2 flex flex-col">
              <label>
                <input id="quantite" name="quantite" class="appearance-none inline-flex bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="Quantité de bouteilles à ajouter">
              </label>
              <label>
                <input id="date_achat" name="date_achat" class="appearance-none inline-flex bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" placeholder="Garde jusqu'à quand">
              </label>
              <label>
                <input id="garde_jusqua" name="garde_jusqua" class="appearance-none inline-flex bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="date" placeholder="Garde jusqu'à quand">
              </label>
              <label>
                <input id="millesime" name="millesime" class="appearance-none inline-flex bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="Millésime">
              </label>
              <label>
                <input class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md border border-accent_wine hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none"
                type="submit"
                value="Ajouter au cellier">
              </label>
            </div>
        </form>
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
              <a href="{{route('celliers.detailBouteille', $bouteille->id)}}" aria-label="Article"><img src="{{ $bouteille->imageSAQ }}" class="object-cover max-h-[350px] rounded" alt="vine-img" /></a>
              <div class="text-center flex flex-col gap-2.5">
                <span class="font-semibold text-section_title">Cellier</span>
                <a href="{{route('celliers.detailBouteille', $bouteille->id)}}" aria-label="Article" class="inline-block text-article_title">
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