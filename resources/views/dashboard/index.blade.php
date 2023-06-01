<x-layouts.layout-dashboard>
    <h1>Paises registrados</h1>
    <a href="{{route('country.create')}}">Registrar nuevo pais</a>
    <ul>
        @foreach( $countries as $country )
            <li>
                {{ $country->name  }}
                <a href="{{ route('country.edit',$country)  }}">Editar</a>
                <form action="{{route('country.destroy',$country)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layouts.layout-dashboard>
