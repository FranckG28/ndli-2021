@extends('layouts.app')
@section('title', 'Sauveteurs')
@section('content')

<h1 class="mx-44 font-bold text-5xl text-blue-800 my-5">Ajout d'un sauveteur</h1>

    <div class="flex justify-center items-center">
      <form class="w-full max-w-lg" action="{{ route('add_rescue') }}" class="flex flex-col gap-3 w-32" method="POST">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Nom
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" id="name" placeholder="Nom" required>
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
          </div>

          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Prenom
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="prenom" id="prenom" placeholder="Prenom" required>
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <input type="date" name="dateBirth" id="dateBirth" placeholder="Date de naissance" required class="my-5 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <input type="date" name="dateDeath" id="dateDeath" oninput="checkDOB()" placeholder="Date de décès (facultatif)" class="my-5 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

            <textarea class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Description" id="description" name="description"></textarea>
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
              Grade
            </label>
            <div class="relative">
              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="gradeput" id="gradeput">
                @foreach(App\Models\Grade::all() as $grades)
                    <option value="{{ $grades->id }}">{{$grades->Nom}}</option>
                @endforeach
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>
              <textarea placeholder="Généalogie" id="genealogie" name="genealogie" class="my-5 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
              <textarea placeholder="Image URL" id="urlimage" name="urlimage" class="my-5 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>

            </div>
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <textarea placeholder="Etat civil" id="etatcivil" name="etatcivil" class="my-5 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
            <textarea placeholder="Carrière" id="carriere" name="carriere" class="my-5 block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
            </div>
        </div>
        <button id="btnSubmit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Submit
        </button>
      </form>
    </div>

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
