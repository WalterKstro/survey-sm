<x-layouts.layout-public>
    <h1>Preguntas</h1>
    <form action="" method="post">
        @csrf
        @foreach($questions as $question)
            <p>{{ $question->question  }}</p>

            @if( $question->type_data == 'boolean' )
                <label for="">Si</label>
                <input type="radio" name="" id="">
                <label for="">No</label>
                <input type="radio" name="" id="">
            @endif

            @if( $question->type_data == 'string' )
                <input type="text">
            @endif

        @endforeach

    </form>
</x-layouts.layout-public>
