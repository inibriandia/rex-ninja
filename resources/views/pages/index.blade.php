@extends('layouts.app')

@section('content')
    <h1>Gestion des evenements</h1>
    <ul>
        <li><a href="/select">Retourner les questions</a></li>
        <li><a href="/pays">Retourner les pays</a></li>
        <li><a href="/getprovinces/1">Retourner les Provinces selon le pays</a></li>
        <li><a href="/getvilles/1">Retourner les villes selon les provinces</a></li>
        <li><a href="/evenements">Retourner les evenements disponibles selon les choix de l'utilisateur</a></li>
        <li><a href="/evenements/1">Retourner un evenement specifique</a></li>
        <li><a href="/event">Creer un evenement</a></li>
    </ul>


