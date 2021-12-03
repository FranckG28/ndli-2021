@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
      <div class="resquer">
        <img class="ml-40 rounded-full w-56 shadow-2xl" src="{{$sauve->url_img}}" alt="sauveur image">
        <div class="px-40 flex flex-col justify-center">
          <h1>{{$sauve->prenom}} {{$sauve->nom}}</h1>
        </div>
      </div>



    </body>
@endsection
