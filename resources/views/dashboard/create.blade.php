<x-layouts.layout-dashboard>
    <h1>Registrar nuevo país</h1>
    <form action="{{ route('country.store')  }}" method="post">
        @csrf
        <label for="name">Nombre: </label>
        <input type="text" id="name" name="name">
        <label for="int">Código de país: </label>
        <input type="text" id="int" name="int">
        <button type="submit">Registrar</button>
    </form>
</x-layouts.layout-dashboard>
