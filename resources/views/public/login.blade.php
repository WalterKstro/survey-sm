
<x-layouts.layout-public>
    <h1 class="text-4xl">Iniciar sessión en San Martin </h1>
    <form action="{{ route('login')  }}" method="post">
        @csrf
        <label for="email">Correo electrónico: </label>
        <input type="email" id="email" name="email">
        <br>
        <label for="password">Contraseña: </label>
        <input type="password" id="password" name="password">
        <br>
        <label for="remember">Mantener sessión: </label>
        <input type="checkbox" name="remember" id="remember">
        <br>
        <button type="submit" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-blue-300">Iniciar sessión</button>
    </form>
</x-layouts.layout-public>
