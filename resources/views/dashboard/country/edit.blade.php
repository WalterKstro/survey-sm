
<x-layouts.layout-dashboard>
    <h1>Editar país</h1>
    <form action="{{ route('country.update', $country)  }}" method="post">
        @csrf @method('PUT')
        <label for="name">Nombre: </label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name',$country->name)  }}"
        >
        <label for="int">Código de país: </label>
        <input
            type="text"
            id="int"
            name="int"
            value="{{ old('int',$country->int)  }}"
        >
        <button type="submit">Actualizar</button>
    </form>
</x-layouts.layout-dashboard>
