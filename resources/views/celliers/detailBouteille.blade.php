@extends('layouts.app')
@section('content')

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <!-- Fiche Detaile Bouteille -->

    <div class="container mx-auto">

    <div class="max-w-screen-lg mx-auto rounded-lg overflow-hidden mt-6 mb-7 p-3">
        <div class="rounded-lg flex flex-col md:flex-row mb-2">

        <div class="bg-gray-50 md:rounded-l-lg md:rounded-tr-none flex-shrink-0 md:w-1/2">
            <img src="{{$bouteille -> image}}" class="object-cover mx-auto h-1/2 md:h-full mt-2 p-3" alt="bouteil de vin">
        </div>
        <div class="bg-box_color rounded-b-lg md:rounded-r-lg md:rounded-bl-none flex-grow flex flex-col">
            <div class="p-5">
            <div class="flex items-center justify-between mb-3">
                <span class="text-m font-medium text-section_title leading-snug">Cellier:</span>
                <span class="text-m font-medium text-section_title leading-snug">Date d'ajout: </span>
            </div>
            <h5 class="sm:text-2xl text-article_title text-xl font-bold leading-6 mb-4">{{$bouteille -> nom}}</h5>

            <div class="flex flex-col gap-4">
                <div class="border-b border-accent_wine-50 py-4 flex justify-start gap-5 items-center">
                <span class="text-m text-section_title font-medium leading-snug">Quantité</span>
                <!-- Compteur -->
                  <!-- ici va le compteur -->
                    <v-compteur :nbbouteille="{{ $bouteille->quantite }}" :id="{{ $bouteille->vino_bouteille_id }}"/>
                
                <!-- end Comteur -->

            </div>
            <div class="flex justify-between border-b border-accent_wine-50 pb-4">
                <div class="flex flex-wrap items-center">
                <span class="text-m text-section_title font-medium leading-snug">Prix de Bouteille</span>
                <span class="text-article_title text-m pt-2 ps-5">$ {{$bouteille -> prix_saq}}</span>
                </div>

                <div class="flex flex-wrap items-center">
                <span class="text-m text-section_title font-medium leading-snug">Valeur Total</span>
                <span class="text-article_title text-m pt-2 ps-5">$ {{$bouteille->total}}</span>
                </div>
            </div>
            <div class="border-b border-accent_wine-50 flex flex-col pb-4">
                <span id="note" class="text-m text-section_title font-medium leading-snug">Note</span>
                <textarea class="hidden resize-none rounded-md py-2 px-3 w-full" id="noteTextarea" name="noteTextarea"> {{$bouteille->note ?? ''}} </textarea>
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
    <!-- fin fiche -->
</div>

@endsection