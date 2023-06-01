
<x-layouts.layout-public>
    <h1>Iniciar sessión en San Martin </h1>
    <form action="{{ route('login')  }}" method="post">
        @csrf
        <label for="email">Correo electrónico: </label>
        <input type="email" id="email" name="email">

        <label for="password">Contraseña: </label>
        <input type="password" id="password" name="password">

        <label for="remember">Mantener sessión: </label>
        <input type="checkbox" name="remember" id="remember">

        <button type="submit">Iniciar sessión</button>
    </form>
</x-layouts.layout-public>
