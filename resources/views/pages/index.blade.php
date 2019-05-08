@extends('layouts.app')

@section('content')
    <h1>Gestion des evenements</h1>
    <ul>
        <li><a href="/select">Retourner les questions</a></li>
        <li><a href="/evenements">Retourner les evenements disponibles selon les choix de l'utilisateur</a></li>
        <li><a href="/evenements/1">Retourner un evenement specifique</a></li>
    </ul>
@endsection