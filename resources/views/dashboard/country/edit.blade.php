
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
        <button type="submit" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
    </form>
</x-layouts.layout-dashboard>
