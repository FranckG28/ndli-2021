@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
      <div class="container mx-auto resquer flex flex-col">

          <h1 class="font-bold text-5xl text-blue-800 my-5">Listes des Sorties en mer</h1>
          <div class="flex flex-col gap-3">

                  @foreach ($trips as $trip)


                      <a href="{{$trip->id}}" class="rounded-lg bg-white p-4 shadow-md flex gap-3 hover:bg-gray-50 transition ease-in-out duration-200 active:bg-gray-100">
                          <div>
                              <h2>{{$trip->nom}}</h2>
                              <p class="text-gray-400 my-1">{{$trip->date}}</p>
                          </div>
                      </a>

                  @endforeach

          </div>

      </div>
    </body>
@endsection
