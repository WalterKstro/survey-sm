<x-layouts.layout-dashboard>
    <h1 class="text-4xl">Preguntas registradas</h1>
    <a href="{{route('questions.create')}}" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar nueva pregunta</a>
    <ul>
        @foreach($questions as $question)
            <li>{{ $question->question }} / <span>{{$question->survey->name}}</span></li>
        @endforeach
    </ul>
</x-layouts.layout-dashboard>
