<x-layouts.layout-public>
    <h1>Encuesta San Martin</h1>
    <form action="{{ route('survey.create')  }}" method="post">
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
        <button type="submit" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Seleccionar</button>
    </form>
</x-layouts.layout-public>
