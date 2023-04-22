@extends('layouts.app')
@section('content')
<div class="bg-white">
  <div class="container mx-auto py-5 px-8 max-w-lg">
    <h2 class="text-4xl font-bold mb-8">Modifier Cellier</h2>
    <p class="text-gray-700 mb-4">Veuillez remplir le formulaire suivant pour modifier un cellier</p>
    <form method="post" enctype="multipart/form-data">
      <!-- ajouter un token pour autoriser la route une seconde fois -->
      <!-- méthode put pour modification -->
      @csrf
      @method('PUT')
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="nom">
          Nom
        </label>
        <!-- ** important de concerver les input ** -->
        <input value="{{$cellier->nom}}" class="w-full items-center justify-center h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded border border-accent_wine focus:shadow-outline" id="nom" name="nom" type="text" placeholder="Entrez le nom du cellier" required>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="quantite_max">
          Quantité
        </label>
        <input value="{{$cellier->quantite_max}}" class="w-full items-center justify-center h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded border border-accent_wine focus:shadow-outline" id="quantite_max" name="quantite_max" type="number" placeholder="Capacité maximale du cellier">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="description">
          Description
        </label>
        <textarea class="w-full h-full items-center justify-center h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded border border-accent_wine focus:shadow-outline" id="description" name="description" type="text" placeholder="Ajouter un descriptif pour ce cellier">{{$cellier->description}}</textarea>
      </div>
      <div class="cellier-img">
        <label>
          <input type="radio" name="image" value="img/celliers/cellierCaveVinMontWashington.webp">
          <img src="{{url('img/celliers/cellierCaveVinMontWashington.webp')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg" checked>
          <img src="{{url('img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_verre_moderne.jpg">
          <img src="{{url('img/celliers/cellier_verre_moderne.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_tonneau.webp">
          <img src="{{url('img/celliers/cellier_tonneau.webp')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_porte_bois_murs.jpg">
          <img src="{{url('img/celliers/cellier_porte_bois_murs.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_mont_killian_bois_pierre.jpg">
          <img src="{{url('img/celliers/cellier_mont_killian_bois_pierre.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_moderne_noir.webp">
          <img src="{{url('img/celliers/cellier_moderne_noir.webp')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_moderne_led.jpg">
          <img src="{{url('img/celliers/cellier_moderne_led.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_moderne_decoratif.jpeg">
          <img src="{{url('img/celliers/cellier_moderne_decoratif.jpeg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_cuisine.jpeg">
          <img src="{{url('img/celliers/cellier_cuisine.jpeg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_contemporain.jpg">
          <img src="{{url('img/celliers/cellier_contemporain.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_brique_bois.jpg">
          <img src="{{url('img/celliers/cellier_brique_bois.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_bois_verre.jpg">
          <img src="{{url('img/celliers/cellier_bois_verre.jpg')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_bois_moderne_trad.webp">
          <img src="{{url('img/celliers/cellier_bois_moderne_trad.webp')}}">
        </label>
        <label>
          <input type="radio" name="image" value="img/celliers/cellier_bois_chateau.jpeg">
          <img src="{{url('img/celliers/cellier_bois_chateau.jpeg')}}">
        </label>
      </div>
      <div class="mb-4 py-4 text-center">
        <input value = "Modifier" class="bg-accent_wine hover:accent_wine-80 text-main font-bold py-2 px-8 rounded focus:outline-none focus:shadow-outline" type="submit" placeholder="Créer le cellier">
        </input>
      </div>
    </form>
  </div>
</div>
</div>

<!-- <div class="w-full px-3">
      <input class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-accent_wine transition duration-200 rounded shadow-md border border-accent_wine hover:bg-accent_wine hover:text-main focus:shadow-outline focus:outline-none" 
      type="submit" 
      placeholder="Créer le cellier">
    </div> -->
</div>
</form>
</div>
@endsection