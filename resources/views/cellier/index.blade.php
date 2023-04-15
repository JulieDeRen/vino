@extends('layouts.app')
@section('content')
<div class="cellier">
    @foreach($celliers as $cellier)
    <p><a href="">{{$cellier->nom}}</a></p>
    @endforeach
</div>
@endsection


