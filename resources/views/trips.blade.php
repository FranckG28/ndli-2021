@extends('layouts.app')
@section('title', 'Sorties en mer')
@section('content')
      <div class="resquer">
        <div class="px-40 flex flex-col justify-center">
          <h1>{{$trips->nom}}</h1>
          <p class="text-gray-400 my-2">{{$trips->date}}</p>
          <p>Nom du bateau : {{$trips->bateau->nom}}</p>
          <p>{{$trips->nb_sauve}} vies sauvées</p>
        </div>
      </div>
      <div class="resquerTopic">
        <h2>Description</h2>
        <p>{{$trips->description}}</p>
      </div>



      <div class="container mx-auto resquer flex flex-col">
          <h1 class="font-bold text-xl text-blue-600 my-5">Listes des Sauveteurs</h1>
          <div class="flex flex-col gap-3">
                  @foreach ($trips->sauveteurs as $sauveteur)


                      <a href="{{route('resquer', $sauveteur->id)}}" class="rounded-lg bg-white p-4 shadow-md flex gap-3 hover:bg-gray-50 transition ease-in-out duration-200 active:bg-gray-100">
                          <img class="ml-40 rounded-full w-16 shadow-2xl" src="{{$sauveteur->urlImg}}" alt="sauveur image">
                          <div>
                              <h2>{{$sauveteur->prenom}} {{$sauveteur->nom}}</h2>
                              <p class="text-gray-400 my-1">{{$sauveteur->date_naissaince}} / {{$sauveteur->date_mort}}</p>
                          </div>
                      </a>

                  @endforeach

          </div>

      </div>

@endsection
