@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
      <div class="resquer">
        <img class="ml-40 rounded-full w-56 shadow-2xl" src="{{$sauveteurs->urlImg}}" alt="image non disponible">
        <div class="px-40 flex flex-col justify-center">
          <h1>{{$sauveteurs->prenom}} {{$sauveteurs->nom}}</h1>
          <p class="text-gray-400 my-2">{{$sauveteurs->date_naissaince}} / {{$sauveteurs->date_mort}}</p>
          <p>{{$sauveteurs->grades->Nom}}</p>

          <p>Au moins 5678 personnes lui doivent la vie</p>
        </div>
      </div>



      <div class="resquerTopic">
        <h2>État civil</h2>
        <p>{{$sauveteurs->etat_civil}}</p>
      </div>

      <div class="resquerTopic">
        <h2>Données généalogiques</h2>
        <p>{{$sauveteurs->genealogie}}</p>
      </div>

      <div class="resquerTopic">
        <h2>Carrière</h2>
        {{$sauveteurs->carriere}}
      </div>

      <div class="resquerTopic">
        <h2>Décorations</h2>
        <img src="https://static4.depositphotos.com/1009948/276/i/600/depositphotos_2767219-stock-photo-set-of-gold-silver-and.jpg">
      </div>

      <div class="resquerTopic">
        <h2>Sauvetages et sorties en mer</h2>

        @foreach ($sauveteurs->sauvetages as $sauvetage)
        <a href="{{route('trips', $sauvetage->id)}}" class="rounded-lg bg-white my-8 p-4 shadow-md flex gap-3 hover:bg-gray-50 transition ease-in-out duration-200 active:bg-gray-100">
          <div class=" ">
            <h3>{{$sauvetage->nom}}</h3>
            <p class="text-gray-400 my-2">{{$sauvetage->date}}</p>
            <p>{{$sauvetage->nb_sauve}} hommes sauvés</p>
          </div>
        </a>

        @endforeach

      </div>


    </body>
@endsection
