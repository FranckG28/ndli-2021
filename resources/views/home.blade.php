@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
        
<div class="container mx-auto">

    <div class="homeHead">
        <h1 class="text-4xl md:text-5xl text-white text-center"><b>Sauveteurs</b> du Dunkerquois</h1>
        <h3 class="font-serif text-gray-300 text-2xl text-center">270 ans d'histoire</h3>

        <form class="bg-white rounded-2xl shadow-lg mt-3 flex align-items px-5">
            <input type="text" name="search" placeholder="Rechercher" class="my-3 flex-grow md:w-64"/>
            <input type="submit" value="Go >" class="bg-transparent hover:text-yellow-500 hover:text-blue-500 w-12 font-bold active:underline mx-2"/>
        </form>
    </div>

    <div class="grid-cols-2 gap-5 py-5">

        <div class="grid gap-3">
            <h2>Qui sommes nous ?</h2>
            <p> 
                Bienvenue sur le site des sauveteurs du dunkerquois. Ce site rend hommage aux femmes, hommes et enfants qui ont réalisé des actes de sauvetages en milieu aquatique.
    </p><p>
                Ces sauveteurs, habitants du dunkerquois, ont participé à plus de 900 sauvetages en mer et plus de 1100 sauvetages individuels. Œuvrant avec courage, abnégation et souvent au mépris du risque ils méritent amplement que leurs actes soient pérennisés.</p>
        </div>

    </div>

</div>

@endsection
