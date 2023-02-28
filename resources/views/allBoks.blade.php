@extends('layouts.home')


@section('content')

<?php
$allcomics = config('comics')
?>

<div class="sfondo">
    <div class="container contenitore-comics d-flex flex-wrap align-items-ceter justify-content-between">
        @foreach ($allcomics as $comic)
            <div class="card">
                <div class="img-container">

                    <img src="{{ $comic['thumb'] }}" alt="copertina">
                </div>
                <h5>{{ $comic['series'] }}</h5>
            </div> 
        @endforeach  
    </div>
</div>
@endsection