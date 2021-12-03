@extends('layouts.app')
@section('title', 'Bateau')
@section('content')
    <body>
        <h1>Community bateau</h1>
        <form action="{{ route('add_boat') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nom" required>
            <select name="typeput" id="typeput">
                @foreach(App\Models\TypeBateau::all() as $type)
                    <option value="{{ $type->id }}">{{$type->nom}}</option>
                @endforeach
            </select>
            <textarea placeholder="Url image" id="urlimg" name="urlimg"></textarea>
            <textarea placeholder="Description" id="description" name="description"></textarea>
            <button id="btnSubmit" type="submit">Valider !</button>
        </form>
    </body>
@endsection