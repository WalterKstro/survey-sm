<x-layouts.layout-dashboard>
    <h1 class="text-4xl">Paises registrados</h1>
    <a href="{{route('country.create')}}" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar nuevo pais</a>
    <ul>
        @foreach( $countries as $country )
            <li>
                {{ $country->name  }}
                <a href="{{ route('country.edit',$country)  }}" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Editar</a>
                <form action="{{route('country.destroy',$country)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Borrar</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layouts.layout-dashboard>
