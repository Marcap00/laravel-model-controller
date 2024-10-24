@extends('layouts.app')
@section('head-title', 'Laravel Template')

@section('main-content')
<main>
    <div class="container">
        <div class="row row-cols-4 g-2">
            @forelse ($movies as $movie)
            <div class="col my-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-2">{{ $movie->title }}</h2>
                        <p class="card-text">
                            Nome originale: <span>{{ $movie->original_title }}</span>
                        </p>
                        <p class="card-text">
                            Nazionalità: <span>{{ ucwords($movie->nationality) }}</span>
                        </p>
                        <p class="card-text">
                            ata di uscita: <span>{{ date('d F Y', strtotime($movie->date)) }}</span>
                        </p>
                        <p class="card-text">
                            Voto: <span>{{ $movie->vote }}</span>
                            <i class="fas fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            @empty
                <p>No movies available</p>
            @endforelse
        </div>
    </div>
</main>
@endsection
