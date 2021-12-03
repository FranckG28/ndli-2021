@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
        <h1>Community Sauvés</h1>
        <form action="/community/saved" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nom" required>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
            <input type="date" name="dateBirth" id="dateBirth" placeholder="Date de naissance" required>
            <input type="date" name="dateDeath" id="dateDeath" placeholder="Date de décès (facultatif)">
            <select name="Grade" id="grade">
                <option value="grade1">Commandant</option>
                <option value="garde2">Grade2</option>
            </select>
            <textarea placeholder="Etat civil" id="etatcivil" name="etatcivil"></textarea>
            <textarea placeholder="Carrière" id="carriere" name="carriere"></textarea>
            <textarea placeholder="Généalogie" id="genealogie" name="genealogie"></textarea>
        </form>
    </body>
@endsection
