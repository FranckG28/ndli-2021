<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<nav>
    <div class="flex flex-row container mx-auto">
      <a href="{{route('home')}}">
        <img src="{{URL('/images/logo.png')}}"  class="w-40 py-5" />
      </a>

        <ul class="flex flex-grow items-center justify-end gap-5 navLinks">
            <li><a href="{{route('resquer')}}">Sauveteur</a></li>
            <li><a href="{{route('trips')}}">Sorties en mer</a></li>
            <li><a href="{{route('saved')}}">Sauvés</a></li>
            <li><a href="{{route('boat')}}">Bateaux</a></li>
        </ul>
    </div>

</nav>
