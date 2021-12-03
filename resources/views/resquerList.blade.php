@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')

<div class="container mx-auto resquer flex flex-col">

    <h1 class="font-bold text-5xl text-blue-800 my-5">Listes des Sauveteurs</h1>
    <div class="flex flex-col gap-3">

            @foreach ($sauveteurs as $sauveteur)

            
                <a href="{{$sauveteur->id}}" class="rounded-lg bg-white p-4 shadow-md flex gap-3 hover:bg-gray-50 transition ease-in-out duration-200 active:bg-gray-100">
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
