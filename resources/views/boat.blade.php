@extends('layouts.app')
@section('title', 'Bateaux')
@section('content')
    <body>
      <div class="resquer">
        <img class="ml-40 rounded-full w-56 shadow-2xl" src="https://histoire-image.org/sites/default/styles/galerie_principale/public/portrait-de_gaulle-1940.jpg?itok=jqhrqo-N" alt="sauveur image">
        <div class="px-40 flex flex-col justify-center">
          <h1>Nom du bateau</h1>
          <p class="text-gray-400 my-2">Type</p>
        </div>
      </div>

      <div class="resquerTopic">
        <h2>Description</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi<br>
          ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit </p>
      </div>


    </body>
@endsection
