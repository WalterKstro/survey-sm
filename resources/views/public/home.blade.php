<x-layouts.layout-public>
    <h1>Encuesta San Martin</h1>
    <form action="{{ route('survey.showQuestions')  }}" method="post">
        @csrf
        <!--param country-->
        <input type="hidden" name="country" value="{{ $params['country']  }}">
        <!--param store-->
        <input type="hidden" name="store" value="{{ $params['store']  }}">
        <!--param box-->
        <input type="hidden" name="box" value="{{ $params['box']  }}">
        <ul>
            @foreach($origins as $origin)
                <input type="radio" name="origin" id="{{$origin->name}}" value="{{ $origin->id  }}" required>
                <label for="{{$origin->name}}">{{ $origin->name  }}</label>
            @endforeach
        </ul>
        <button type="submit">Seleccionar</button>
    </form>
</x-layouts.layout-public>
