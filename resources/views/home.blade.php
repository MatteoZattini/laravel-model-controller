@extends('layouts.app')

@section('content')
<h1>Dati da "config/data.php": {{ $dati["home"] }}</h1>
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap">
            @foreach ($movie as $singlemovie)
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $singlemovie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">{{ $singlemovie->original_title }}</h6>
                  <p class="card-text">{{ $singlemovie->nationality }}</p>
                  <p class="card-text">rilasciato nel {{ $singlemovie->date }}</p>
                  <p class="card-text">{{ $singlemovie->vote }}</p>
                  <a href="#" class="card-link">see more</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
