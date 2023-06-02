<x-layouts.layout-public>
    <h1>{{ $questions[0]->name  }}</h1>
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
        <button type="submit">Responder</button>
    </form>
</x-layouts.layout-public>
