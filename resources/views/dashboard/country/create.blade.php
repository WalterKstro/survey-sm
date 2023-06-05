<x-layouts.layout-dashboard>
    <h1 class="text-2xl">Registrar nuevo país</h1>
    <form action="{{ route('country.store')  }}" method="post">
        @csrf
        <label for="name">Nombre: </label>
        <input type="text" id="name" name="name">
        <label for="int">Código de país: </label>
        <input type="text" id="int" name="int">
        <button type="submit" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
    </form>
</x-layouts.layout-dashboard>
