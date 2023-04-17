@extends('layouts.app')
@section('content')

<div class="container">

home
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-3xl font-bold text-lime-400 mx-10">
                        Hello world! Exemple de Tailwind CSS utilisation
                    </h1> 

                    <div id="app">

                    </div>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection