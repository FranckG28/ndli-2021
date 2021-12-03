<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<nav>
    <div class="flex flex-row container mx-auto">
      <a href="{{route('home')}}">
        <img src="{{URL('/images/logo.png')}}"  class="w-40 py-5" />
      </a>

        <ul class="flex flex-grow items-center justify-end gap-5 navLinks">
            <li><a href="{{route('resquerList')}}">Sauveteur</a></li>
            <li><a href="{{route('tripsList')}}">Sorties en mer</a></li>
            <li><a href="{{route('savedList')}}">Sauvés</a></li>
            <li><a href="{{route('boatList')}}">Bateaux</a></li>
        </ul>
    </div>

</nav>
