@extends('layouts.home')


@section('content')


<div class="sfondo">

    <div class="container contenitore-comics d-flex flex-wrap align-items-ceter justify-content-between">
        @foreach ($all_comics as $comic)
            <div class="card">
                <a href="{{route('book.show', $comic['id'])}}">
                    <div class="img-container">

                        <img src="{{ $comic['thumb'] }}" alt="copertina">
                    </div>
                    <h5>{{ $comic['series'] }}</h5>
                </a>
            </div> 
        @endforeach  
    </div>
</div>
@endsection