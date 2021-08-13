@extends('layouts.homepage.master')

@section('content')
<div class="col s12 m12">
    <div class="card horizontal hoverable">
        <div class="card-image">
            <img src="{{ $book->cover }}" >
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <h4>{{ $book->title }}</h4>
                <blockquote>
                    <p>{{ $book->description  }}</p>
                </blockquote>
                <p>
                    <i class="material-icons">Person</i>: {{ $author-> }}
                </p>
                
            </div>
            <div class="card-action">
                <a href="#" class="btn red accen-1 right waves-effect waves-light">Pinjam Buku</a>
            </div>
        </div>
    </div>
</div>


@endsection