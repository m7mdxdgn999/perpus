@extends('layouts.homepage.master')

@section('content')
<h2>Koleksi Buku</h2>
<blockquote><p class="flow-text">Koleksi Buku yang bisa kamu baca & pinjam!</p></blockquote>
<div class="row">
    @foreach($books as $book)
    <div class="col s12 m6">
        <div class="card horizontal hoverable">
            <div class="card-image">
                <img src="{{ $book->cover }}" height="200px">
            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <h6><a href="{{ route('book.show', $book->kode_buku) }}">{{ Str::limit($book->title, 30)  }}</a></h6>
                    <p>{{ Str::limit($book->description, 100)  }}</p>
                </div>
                <div class="card-action">
                    <form action="{{ route('book.borrow') }}" method="post">
                        <input type="hidden" name="kode_buku" value="{{  $book->kode_buku }}">
                        @csrf
                        <input type="submit" value="pinjam buku" class="btn red accen-1 right waves-effect waves-light">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach



</div>

{{-- pagination --}}
{{ $books->links('vendor.pagination.materialliz') }}
<ul class="pagination center">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
            


@endsection