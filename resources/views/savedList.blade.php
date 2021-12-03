@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
<div class="container mx-auto resquer flex flex-col">

    <h1 class="font-bold text-5xl text-blue-800 my-5">Listes des Sauvées</h1>
    <div class="flex flex-col gap-3">

            @foreach ($sauves as $sauve)


                <a href="{{$sauve->id}}" class="rounded-lg bg-white p-4 shadow-md flex gap-3 hover:bg-gray-50 transition ease-in-out duration-200 active:bg-gray-100">
                    <div>
                        <h2>{{$sauve->prenom}} {{$sauve->nom}}</h2>
                    </div>
                </a>

            @endforeach



    </div>

</div>
@endsection
