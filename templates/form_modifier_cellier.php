

<div class="flex flex-col lg:flex-row h-screen items-center">
      <div class="bg-gray-900 lg:w-1/2">
        <div class="flex flex-col justify-center lg:h-screen">
          <img src="img/form_wine.jpg" alt="" class="h-full w-full object-cover">
        </div>
      </div>
      <div class="bg-white lg:w-1/2">
        <div class="container mx-auto py-16 px-8">
          <h2 class="text-4xl font-bold mb-8">Modifier Cellier</h2>
          <p class="text-gray-700 mb-4">Veuillez remplir le formulaire suivant pour rentres des bouteilles qui ne sont pas sur SAQ.</p>
          <form action="{{route('celliers.insererCellier')}}" method="post" enctype="multipart/form-data" class="w-full">
            @csrf
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="nom">
                Nom
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" name="nom" type="text" placeholder="Entrez le nom du cellier" required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="quantite_max"">
                Quantité
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantite_max" name="quantite_max" type="number" placeholder="Capacité maximale du cellier">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="description">
                Description
              </label>
              <textarea class="shadow appearance-none border rounded w-full py-5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="Ajouter un descriptif pour ce cellier"></textarea>
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
                <div class="flex flex-col lg:flex-row h-screen items-center">
      <div class="bg-gray-900 lg:w-1/2">
        <div class="flex flex-col justify-center lg:h-screen">
          <img src="img/form_wine.jpg" alt="" class="h-full w-full object-cover">
        </div>
      </div>
      <div class="bg-white lg:w-1/2">
        <div class="container mx-auto py-16 px-8">
          <h2 class="text-4xl font-bold mb-8">Modifier Cellier</h2>
          <p class="text-gray-700 mb-4">Veuillez remplir le formulaire suivant pour rentres des bouteilles qui ne sont pas sur SAQ.</p>
          <form action="{{route('celliers.insererCellier')}}" method="post" enctype="multipart/form-data" class="w-full">
            @csrf
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="nom">
                Nom
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" name="nom" type="text" placeholder="Entrez le nom du cellier" required>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="quantite_max"">
                Quantité
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantite_max" name="quantite_max" type="number" placeholder="Capacité maximale du cellier">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="description">
                Description
              </label>
              <textarea class="shadow appearance-none border rounded w-full py-5 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="Ajouter un descriptif pour ce cellier"></textarea>
            </div>
            <div class="w-full px-3 cellier-img">
              <label>
                <input type="radio" name="image" value="img/celliers/cellierCaveVinMontWashington.webp">
                <img src="{{url('img/celliers/cellierCaveVinMontWashington.webp')}}">
              </label>
              <label>
                <input type="radio" name="image" value="img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg"  checked>
                <img src="{{url('img/celliers/large_Charlevoix-Wine-Cellar-with-Dog.jpg')}}">
              </label>
              <label>
                <input type="radio" name="image" value="img/celliers/cellier_verre_moderne.jpg">
                <img src="{{url('img/celliers/cellier_verre_moderne.jpg')}}">
              </label>
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