@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
        <h1>Listes des Sauveteurs</h1>

        @foreach ($sauveteurs as $sauveteur)

        <div>
          <img class="ml-40 rounded-full w-16 shadow-2xl" src="{{$sauveteur->urlImg}}" alt="sauveur image">
          <h2>{{$sauveteur->prenom}} {{$sauveteur->nom}}</h2>
          <p class="text-gray-400 my-2">{{$sauveteur->date_naissaince}} / {{$sauveteur->date_mort}}</p>
        </div>

        @endforeach
    </body>
@endsection
