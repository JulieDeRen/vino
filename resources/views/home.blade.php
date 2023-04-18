@extends('layouts.app')
@section('content')

<div class="container mx-auto">
  <v-recherche />
  <div class="max-w-screen-md mx-auto rounded-lg overflow-hidden mt-6 mb-7 p-3">
    <div class="border border-accent_wine rounded-lg">
      <div class="bg-gray-50 rounded-md rounded-t-lg">
        <img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover mx-auto h-1/2 md:h-full p-3" alt="bouteil de vin">
      </div>
      <div class="bg-box_color rounded-b-lg">
        <div class="p-5 py-2">
          <div class="flex items-center justify-between mb-3">
            <span class="text-m uppercase font-medium text-section_title leading-snug">Cellier - </span>
            <span class="text-sm uppercase text-section_title leading-snug">Date d'ajout: </span>
          </div>

          <h5 class="sm:text-2xl text-article_title text-xl font-bold leading-6 mb-4">Alain Jaume Côtes du Rhône Grand Veneur 2021</h5>

          <div class="border-b border-accent_wine-50 py-4 mb-3 flex justify-between items-center">
            <span class="text-m text-section_title font-medium leading-snug">Quantité</span>
            <input type="number" value="2" class="font-nunito text-article_title font-semibold max-w-[100px] text-m px-5 appearance-none  bg-transparent">

             <!-- Boutton pour ouvrir modal -->
            <button id="myBtn" class="border-section_title border text-section_title px-4 py-2 rounded hover:bg-transparent hover:bg-section_title hover:text-main ">Modifier</button>
          </div>
          <div class="flex justify-between mt-4 border-b border-accent_wine-50 py-4 mb-3">
            <div>
              <span class="text-m text-section_title font-medium leading-snug">Prix</span>
              <span class="text-article_title text-m px-5">$ 23</span>
            </div>
            <div>
              <span class="text-m text-section_title font-medium leading-snug">Valeur Total</span>
              <span class="text-article_title text-m ps-5">$ 52</span>
            </div>
            </div>
            <div class="border-b border-accent_wine-50 py-4">
            <span class="text-m text-section_title font-medium leading-snug">Note</span>
            <p class="text-article_title text-m mt-3">Exellant vin</p>
            </div>
            <div class="flex flex-row items-center justify-between py-5">
              <a href="#" class="inline-block border border-accent_wine font-semibold text-accent_wine px-4 py-2 rounded mt-4 hover:bg-accent_wine  hover:text-main transition-colors duration-300">Deplacer</a>
              <a href="#" class="inline-block border border-accent_wine  text-accent_wine font-semibold px-4 py-2 rounded mt-4 hover:bg-accent_wine hover:text-main transition-colors duration-300">Delete</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Contenue Modal -->
<div id="myModal" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center hidden ">
  <!-- Contenue-->
  <div class="modal-content bg-gray-50 w-1/3  min-w-[300px] p-5 flex flex-col border border-accent_wine rounded-lg">
    <span class="close-modal absolute top-5 right-5 text-accent_wine rounded-md border p-2 border-accent_wine hover:bg-accent_wine cursor-pointer hover:text-main" >&times;</span>
    <h2 class="text-lg font-bold mb-4">Ajouster la quantité</h2>

    <span>Nouveau Quantité</span>
    <button class="mt-4 border-accent_wine border text-accent_wine px-4 py-2 rounded hover:bg-accent_wine hover:text-main max-w-[300px]">Modifier</button>
  </div>
</div>



<script>
  // le modal sur la fishe de la carte
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");


var closeBtn = document.getElementsByClassName("close-modal")[0];
closeBtn.onclick = function() {
  modal.style.display = "none";
};

btn.onclick = function() {
  modal.style.display = "flex";
};
</script>
@endsection







