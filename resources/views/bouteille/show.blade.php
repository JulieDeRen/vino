@extends('layouts.app')
@section('content')
<div>
    <h1>Hello World</h1>
    <section class="flex flex-wrap">
        @foreach($bouteilles as $bouteille)
            <div class="block border border-green-500 max-w-md:">
                <img class="" src="{{ $bouteille->image }}" alt="cellier à Malibu" width="200" />
                <h3 class="mb-2 text-3xl font-bold leading-none sm:text-2xl">
                {{ $bouteille->nom }}
                </h3>
                <p class="text-gray-700">
                {{ $bouteille->prix }}
                </p>
            </div>
        @endforeach
    </section>
@endsection


