<nav>
    <ul>
        <li class="{{setActive('home')}}"><a href="{{route('home')}}">@lang('Home')</a></li>
        <li class="{{setActive('contactos')}}"><a href="{{route('contactos')}}">@lang('contactos')</a></li>

        @guest
            <li><a href="{{route('login')}}">Login</a></li>
        @else
            <li><a href="#"    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"> >Cerrar Sesion</a></li>
        @endguest
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>


