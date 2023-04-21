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
            <section class="flex flex-wrap">
                <v-recherche />
            </section>
          </div>
          <div class="w-full">
            <label>
              <input id="quantite" name="quantite" class="appearance-none inline-flex bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="Quantité de bouteilles à ajouter">
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

   

      <!-- Redirection vers modifier les infos du cellier -->
      <div class="text-center w-full">
        <a
          href="{{route('celliers.modifier', ['cellier' => $cellier->id])}}"
          class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md border border-accent_wine hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none"
        >
          Modifier les informations du cellier
        </a>
      </div>
    </div>
  </div>
</div>

@endsection