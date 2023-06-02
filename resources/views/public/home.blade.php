<x-layouts.layout-public>
    <h1>Encuesta San Martin</h1>
    <form action="{{ route('survey.showQuestions')  }}" method="post">
        @csrf
        <input type="hidden" name="country" value="{{ $params['country']  }}">
        <ul>
            @foreach($origins as $origin)
                <input type="radio" name="origin" id="{{$origin->name}}" value="{{ $origin->id  }}" required>
                <label for="{{$origin->name}}">{{ $origin->name  }}</label>
            @endforeach
        </ul>
        <button type="submit">Seleccionar</button>
    </form>
</x-layouts.layout-public>
