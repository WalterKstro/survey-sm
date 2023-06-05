<x-layouts.layout-dashboard>
    <h1 class="text-2xl">Registrar nueva pregunta</h1>
    <form action="{{ route('questions.store')  }}" method="post">
        @csrf
        <label for="question">Pregunta: </label>
        <input type="text" id="question" name="question">
        <br>
        <label for="survey">Encuesta objetivo: </label>
        <select name="survey_id" id="survey">
            <option value="">Seleccione una encuesta</option>
            @foreach($surveys as $survey)
                @if( (bool) $survey->active )
                    <option value="{{$survey->id}}">{{$survey->name}}</option>
                @endif
            @endforeach
        </select>
        <br>
        <label for="survey">Tipo de respuesta: </label>
        <select name="type_answer_id" id="type_answer">
            <option value="">Seleccione un tipo de respuesta</option>
            @foreach($type_answers as $type_answer)
                <option value="{{$type_answer->id}}">{{$type_answer->name}}</option>
            @endforeach
        </select>
        <br>

        <p>¿La pregunta es opcional?</p>
        <input type="radio" name="optional" id="optional_yes" value="1">
        <label for="optional_yes">Si</label>

        <input type="radio" name="optional" id="optional_no" value="0">
        <label for="optional_no">No</label>
        <br>
        <button type="submit" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
    </form>
</x-layouts.layout-dashboard>
