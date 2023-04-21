@extends('layouts.app')
@section('content')

<!-- Fiche Detaile Bouteille -->

<div class="container mx-auto">

  <div class="max-w-screen-lg mx-auto rounded-lg overflow-hidden mt-6 mb-7 p-3">
    <div class="rounded-lg flex flex-col md:flex-row mb-2">

      <div class="bg-gray-50 md:rounded-l-lg md:rounded-tr-none flex-shrink-0 md:w-1/2">
        <img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover mx-auto h-1/2 md:h-full mt-2 p-3" alt="bouteil de vin">
      </div>
      <div class="bg-box_color rounded-b-lg md:rounded-r-lg md:rounded-bl-none flex-grow flex flex-col">
        <div class="p-5">
          <div class="flex items-center justify-between mb-3">
            <span class="text-m font-medium text-section_title leading-snug">Cellier:</span>
            <span class="text-m font-medium text-section_title leading-snug">Date d'ajout: </span>
          </div>
          <h5 class="sm:text-2xl text-article_title text-xl font-bold leading-6 mb-4">Alain Jaume Côtes du Rhône Grand Veneur 2021</h5>

          <div class="flex flex-col gap-4">
            <div class="border-b border-accent_wine-50 py-4 flex justify-start gap-5 items-center">
              <span class="text-m text-section_title font-medium leading-snug">Quantité</span>
              <div class="flex flex-col items-center py-3">
                <div class="inline-flex items-center">
                  <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                  </button>
                  <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"> 2
                  </div>
                  <button class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                  </button>
                </div>
              </div>
            
            <!-- end Comteur -->

          </div>
          <div class="flex justify-between border-b border-accent_wine-50 pb-4">
            <div class="flex items-center">
              <span class="text-m text-section_title font-medium leading-snug">Prix de Bouteille</span>
              <span class="text-article_title text-m px-5">$ 23</span>
            </div>

            <div class="flex items-center">
              <span class="text-m text-section_title font-medium leading-snug">Valeur Total</span>
              <span class="text-article_title text-m ps-5">$ 52</span>
            </div>
          </div>
          <div class="border-b border-accent_wine-50 flex flex-col pb-4">
            <span id="note" class="text-m text-section_title font-medium leading-snug">Note</span>
            <textarea class="hidden resize-none rounded-md py-2 px-3 w-full" id="noteTextarea" name="noteTextarea"> {{$note ?? ''}} </textarea>
          </div>
        </div>
      </div>
      <div class="flex flex-row items-center self-center pt-5 pb-4 ps-5 gap-10 mt-auto">
        <a href="#" class="inline-block border border-accent_wine font-semibold text-accent_wine px-4 py-2 rounded hover:bg-accent_wine  hover:text-main transition-colors duration-300">Déplacer</a>
        <a href="#" class="inline-block border border-accent_wine  text-accent_wine font-semibold px-4 py-2 rounded  hover:bg-accent_wine hover:text-main transition-colors duration-300">Supprimer</a>
      </div>


    </div>
  </div>
</div>
</div>
<!-- <div class="px-4 py-16 mx-auto flex justify-center sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-16 lg:px-8 lg:py-20"> -->
  <!-- Grille composante -->
  
  <!-- <div class="grid gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4"> -->

    <!-- carte -->
    <!-- <div class="overflow-hidden shadow border-section_title duration-300 flex flex-col gap-3 items-center  bg-white rounded-lg max-h-55 p-4 w-full">
      <a href="/" aria-label="Article"><img src="https://www.saq.com/media/catalog/product/1/5/15116225-1_1679602083.png?width=367&amp;height=550&amp;canvas=367,550&amp;quality=80&amp;fit=bounds" class="object-cover max-h-[350px] max-w-[315px] rounded" alt="vine-img" /></a>
      <div class="text-center flex flex-col gap-2.5">
        <span class="font-semibold text-section_title">Cellier</span>
        <a href="/" aria-label="Article" class="inline-block text-article_title">
          <p class="sm:text-2xl text-xl font-bold leading-6">André Rohrer Stein Riesling</p>
        </a> -->
        <!-- ici va la note avec qty -->

      <!-- </div> -->
      <!-- ici va le compteur -->
      <!-- <div class="flex flex-col items-center py-3">
        <div class="inline-flex items-center">
          <button class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
            </svg>
          </button>
          <div class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none"> 2
          </div>
          <button class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
          </button>
        </div>
      </div>
    </div> -->
    <!-- fin carte -->  
<!-- 
    
  </div>
</div> -->

    @endsection