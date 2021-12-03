@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
      <div class="resquer">
        <img class="ml-40 rounded-full w-56 shadow-2xl" src="{{$sauveteurs->urlImg}}" alt="sauveur image">
        <div class="px-40 flex flex-col justify-center">
          <h1>{{$sauveteurs->prenom}} {{$sauveteurs->nom}}</h1>
          <p class="text-gray-400 my-2">{{$sauveteurs->date_naissaince}} / {{$sauveteurs->date_mort}}</p>
          <p>Commandant...</p>
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
        <div class="flex my-5">
          <p class=" text-gray-800 text-xl">1900</p>

          <div class="flex flex-col ml-4">
            <div class="saveItem" >
              <h3>Sauvetage de l'allège SPECULANT</h3>
              <p>12 septembres - 4 homme sauvés</p>
            </div>
            <div class="saveItem">
              <h3>Sauvetage de l'allège SPECULANT</h3>
              <p>12 septembres - 4 homme sauvés</p>
            </div>
            <div class="saveItem">
              <h3>Sauvetage de l'allège SPECULANT</h3>
              <p>12 septembres - 4 homme sauvés</p>
            </div>
          </div>
        </div>

        <div class="flex my-5">
          <p class=" text-gray-800 text-xl">1900</p>

          <div class="flex flex-col ml-4">
            <div class="saveItem" >
              <h3>Sauvetage de l'allège SPECULANT</h3>
              <p>12 septembres - 4 homme sauvés</p>
            </div>
            <div class="saveItem">
              <h3>Sauvetage de l'allège SPECULANT</h3>
              <p>12 septembres - 4 homme sauvés</p>
            </div>
            <div class="saveItem">
              <h3>Sauvetage de l'allège SPECULANT</h3>
              <p>12 septembres - 4 homme sauvés</p>
            </div>
          </div>
        </div>
      </div>


    </body>
@endsection
