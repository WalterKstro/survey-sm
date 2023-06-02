<x-layouts.layout-public>
    <h1>{{ $questions[0]->name  }}</h1>
    <form action="" method="post">
        @csrf
        @foreach($questions[0]->questions as $question)
            <p>{{ $question->question  }}</p>
            @if( $question->type_answer_id == 2 )
                <label for="">Si</label>
                <input type="radio" name="" id="">
                <label for="">No</label>
                <input type="radio" name="" id="">
            @endif

            @if( $question->type_answer_id == 1 )
                <input type="text">
            @endif

            @if( $question->type_answer_id == 3 )
                @for($start=1; $start<6; $start++)
                    <input id="" class="question-check sr-only" type="radio" name="{{$start.$question->$question}}" value="{{$start}}">
                    <label>{{$start}}</label>
                @endfor
            @endif
        @endforeach
        <button type="submit">Responder</button>
    </form>
</x-layouts.layout-public>
