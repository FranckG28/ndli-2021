@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')
    <body>
        <h1>Community Sauvés</h1>
        <form action="{{ route('add_rescue') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" placeholder="Nom" required>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
            <input type="date" name="dateBirth" id="dateBirth" placeholder="Date de naissance" required>
            <input type="date" name="dateDeath" id="dateDeath" oninput="checkDOB()" placeholder="Date de décès (facultatif)">
            <select name="gradeput" id="gradeput">
                @foreach(App\Models\Grade::all() as $grades)
                    <option value="{{ $grades->id }}">{{$grades->Nom}}</option>
                @endforeach
            </select>
            <textarea placeholder="Etat civil" id="etatcivil" name="etatcivil"></textarea>
            <textarea placeholder="Carrière" id="carriere" name="carriere"></textarea>
            <textarea placeholder="Généalogie" id="genealogie" name="genealogie"></textarea>
            <button id="btnSubmit" type="submit">Valider !</button>
        </form>
    </body>
@endsection

<script type="text/javascript">
    function checkDOB() {
        var dateBirth = document.getElementById('dateBirth').value;
        var dateDeath = document.getElementById('dateDeath').value;
        if ( dateDeath > dateBirth ) { 
            $('#dateDeath').after('<p>You cannot enter a date in the future!.</p>');
            return false;
        }
        return true;
    }
</script>
