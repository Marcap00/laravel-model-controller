@extends('layouts.app')
@section('head-title', 'Laravel Template')

@section('main-content')
<main>
    <div class="container">
        <div class="row row-cols-4">
            @forelse ($movies as $movie)
            <div class="col">
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->original_title }}</p>
                <p>{{ $movie->nationality }}</p>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
            </div>
            @empty
                <p>No movies available</p>
            @endforelse
        </div>
    </div>
</main>
@endsection
