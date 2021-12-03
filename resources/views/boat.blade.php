@extends('layouts.app')
@section('title', 'Bateaux')
@section('content')
    <body>
      <div class="resquer">
        <img class="ml-40 rounded-full w-56 shadow-2xl" src="{{$bateau->url_image}}" alt="sauveur image">
        <div class="px-40 flex flex-col justify-center">
          <h1>{{$bateau->nom}}</h1>
          <p class="text-gray-400 my-2">Type : {{$bateau->type->nom}}</p>
        </div>
      </div>

      <div class="resquerTopic">
        <h2>Description</h2>
        <p>{{$bateau->description}}</p>
      </div>


    </body>
@endsection
