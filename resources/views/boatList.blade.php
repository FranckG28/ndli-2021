@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
        <h1 class="font-bold text-5xl text-blue-800 my-5">Listes des Bateaux</h1>
        <div class="flex flex-col gap-3">
        @foreach ($bateaux as $bateau)


            <a href="{{$bateau->id}}" class="rounded-lg bg-white p-4 shadow-md flex gap-3 hover:bg-gray-50 transition ease-in-out duration-200 active:bg-gray-100">
                <img class="ml-40 rounded-full w-16 shadow-2xl" src="{{$bateau->url_image}}" alt="sauveur image">
                <div>
                    <h2>{{$bateau->nom}}</h2>
                    <p class="text-gray-400 my-1"></p>
                </div>
            </a>

        @endforeach
      </div>
    </body>
@endsection
