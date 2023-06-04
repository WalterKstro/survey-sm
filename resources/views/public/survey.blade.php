<x-layouts.layout-public>
    <h1 class="mb-4 text-4xl font-semibold leading-none tracking-tight text-gray-900">{{ $questions[0]->name  }}</h1>
    <form action="{{ route('survey.store')  }}" method="post">
        @csrf
        <!--store id-->
        <input type="hidden" name="store_id" value="{{ $store_id  }}">
        <!--box id-->
        <input type="hidden" name="box_id" value="{{ $box_id  }}">
        <!--survey id-->
        <input type="hidden" name="survey_id" value="{{ $questions[0]->id  }}">

        @foreach($questions[0]->questions as $question)
            <p>{{ $question->question  }}</p>

            <!--Open question-->
            @if( $question->type_answer_id == 1 )
                <input type="text" name="{{$question->id}}">
            @endif

            <!--Close question-->
            @if( $question->type_answer_id == 2 )
                <label for="">Si</label>
                <input type="radio" name="{{$question->id}}" value="Si">

                <label for="">No</label>
                <input type="radio" name="{{$question->id}}" value="No">
            @endif

            <!--Range question-->
            @if( $question->type_answer_id == 3 )
                @for($start=1; $start<6; $start++)
                    <input id="" type="radio" name="{{$question->id}}" value="{{$start}}">
                    <label>{{$start}}</label>
                @endfor
            @endif
        @endforeach
        <br>
        <button type="submit" class="rounded-md bg-primary px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Responder</button>
    </form>
</x-layouts.layout-public>
