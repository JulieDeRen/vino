
<div class="flex flex-col lg:flex-row h-screen items-center">
  <div class="bg-gray-900 lg:w-1/2">
    <div class="flex flex-col justify-center lg:h-screen">
      <img src="img/form_wine.jpg" alt="" class="h-full w-full object-cover">
    </div>
  </div>
  <div class="bg-white lg:w-1/2">
    <div class="container mx-auto py-16 px-8">
      <h2 class="text-4xl font-bold mb-8">Ajout de Bouteilles</h2>
      <p class="text-gray-700 mb-4">Veuillez utiliser le champ suivant pour rechercher le nom de vos bouteilles sur le catalogue SAQ.</p>
      <form method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <section class="flex flex-wrap">
            <v-recherche />
        </section>
        <div class="mb-4">
         <section class="flex flex-wrap">
            <v-recherche />
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom_bouteille" name="nom_bouteille" type="text" placeholder="Nom du vin">
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="quantite">
            Quantité
          </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="quantite" name="quantite" type="number" placeholder="Quantité de bouteilles à ajouter">
        </div>
          <div class="flex items-center justify-between">
            <button class="bg-accent_wine hover:accent_wine-80 text-main font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Ajouter au cellier
              </button>
          </div>
            </form>
            </div>
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