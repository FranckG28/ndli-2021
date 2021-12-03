@extends('layouts.app')
@section('title', 'Bateau')
@section('content')
    <body>
    <h1 class="mx-44 font-bold text-5xl text-blue-800 my-5">Ajout d'un bateau</h1>

        <div class="flex justify-center items-center" >

          <form class="w-full max-w-lg" action="{{ route('add_boat') }}" method="POST">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
              <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                  Nom du bateau
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" id="name" placeholder="Nom" required>
                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-2">
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <textarea class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Description" id="description" name="description"></textarea>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                  Type
                </label>
                <div class="relative">
                  <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="typeput" id="typeput">
                      @foreach(App\Models\TypeBateau::all() as $type)
                          <option value="{{ $type->id }}">{{$type->nom}}</option>
                      @endforeach
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <textarea class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Url image" id="urlimg" name="urlimg"></textarea>
              </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Submit
            </button>
          </form>
        </div>

    </body>
@endsection
