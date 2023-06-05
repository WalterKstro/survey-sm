<x-layouts.layout-dashboard>
    <h1 class="text-4xl">Preguntas registradas</h1>
    <a href="{{route('questions.create')}}" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar nueva pregunta</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Encuesta</th>
            <th scope="col">Editar</th>
            <th scope="col">Borar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <th scope="row">{{ $question->id }}</th>
                <td>{{ $question->question }}</td>
                <td>{{ $question->survey->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layouts.layout-dashboard>
