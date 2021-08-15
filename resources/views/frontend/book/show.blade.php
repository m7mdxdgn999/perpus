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
                    <i class="material-icons">person</i>: {{ $book->name }}
                </p>
                <p>
                    <i class="material-icons">book</i>: {{ $book->qty }}
                </p>
                
            </div>
            <div class="card-action">
                <form action="{{ route('book.borrow') }}" method="post">
                    @csrf
                    <input type="hidden" name="kode_buku" value="{{  $book->kode_buku }}">                   
                    <input type="submit" value="pinjam buku" class="btn red accen-1 right waves-effect waves-light">
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <h4>Buku Lainnya dari penulis {{ $book->name }}</h4>
<div class="row">
    @foreach($book as $bok)
    <div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
                <img src="{{ $bok->cover }}" height="200px">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h6><a href="{{ route('book.show', $bok->kode_buku) }}">{{ Str::limit($bok->title, 30)  }}</a></h6>
                    <p>{{ Str::limit($bok->description, 100)  }}</p>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach



</div> --}}


@endsection