<nav>
    <ul>
        <li><a href="{{ route('country.index') }}">Paises</a></li>
        <li><a href="#">Origen</a></li>
        <li><a href="#">Encuesta</a></li>
        <li><a href="#">Preguntas</a></li>
        <form action="{{ route('authentication.destroy')  }}" method="post">
            @csrf
            <button type="submit">Cerrar sessión</button>
        </form>
        <li>Bienvenido: {{ Auth::user()->name  }}</li>
    </ul>
</nav>
