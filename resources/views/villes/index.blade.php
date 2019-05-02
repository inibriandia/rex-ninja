@extends('layouts.app')

@section('content')
    <h1>Liste des villes</h1>
    @if(count($villes) > 0)
        <ul>
            @foreach($villes as $ville)
                <li>{{$ville->ville}}</li>
            @endforeach
        </ul>
    @else
        <p>Pas de villes</p>
    @endif
@endsection