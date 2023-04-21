
<div class="flex flex-col lg:flex-row h-screen items-center">
      <div class="bg-gray-900 lg:w-1/2">
        <div class="flex flex-col justify-center lg:h-screen">
          <img src="img/form_wine.jpg" alt="" class="h-full w-full object-cover">
        </div>
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
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Ajouter
                </button>
                </div>
                </form>
                </div>
                </div>
                </div>