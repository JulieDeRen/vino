@extends('layouts.app')
@section('content')
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
<form action="{{route('celliers.insererCellier')}}" method="post" class="w-full max-w-lg">
  @csrf
  <div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nom">
        Nom
      </label>
      <input id="nom" name="nom" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Entrez le nom du cellier" required>
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="quantite_max">
        Quantité
      </label>
      <input id="quantite_max" name="quantite_max" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="Capacité maximale du cellier">
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
        Description
      </label>
      <textarea name="description" id="description" cols="30" rows="10" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Ajouter un descriptif à ce cellier "></textarea>
    </div>
    <div class="w-full px-3 cellier-img">
      <label>
        <input type="radio" name="image" value="img/celliers/cellierCaveVinMontWashington.webp">
        <img src="img/celliers/cellierCaveVinMontWashington.webp">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg"  checked>
        <img src="img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_verre_moderne.jpg">
        <img src="img/celliers/cellier_verre_moderne.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_tonneau.webp">
        <img src="img/celliers/cellier_tonneau.webp">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_porte_bois_murs.jpg">
        <img src="img/celliers/cellier_porte_bois_murs.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_mont_killian_bois_pierre.jpg">
        <img src="img/celliers/cellier_mont_killian_bois_pierre.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_moderne_noir.webp">
        <img src="img/celliers/cellier_moderne_noir.webp">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_moderne_led.jpg">
        <img src="img/celliers/cellier_moderne_led.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_moderne_decoratif.jpeg">
        <img src="img/celliers/cellier_moderne_decoratif.jpeg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_cuisine.jpeg">
        <img src="img/celliers/cellier_cuisine.jpeg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_contemporain.jpg">
        <img src="img/celliers/cellier_contemporain.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_brique_bois.jpg">
        <img src="img/celliers/cellier_brique_bois.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_bois_verre.jpg">
        <img src="img/celliers/cellier_bois_verre.jpg">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_bois_moderne_trad.webp">
        <img src="img/celliers/cellier_bois_moderne_trad.webp">
      </label>
      <label>
        <input type="radio" name="image" value="img/celliers/cellier_bois_chateau.jpeg">
        <img src="img/celliers/cellier_bois_chateau.jpeg">
      </label>
    </div>

    <div class="w-full px-3">
      <input class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md md:w-auto bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" type="submit" placeholder="Créer le cellier">
    </div>
  </div>
</form>
</div>
@endsection
