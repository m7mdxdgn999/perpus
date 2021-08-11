@extends('layouts.admin.master')
@section('title', 'Edit Penulis')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.author.update',$author->kode_author) }}" method="POST">
                        @method('put')
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="">Nama</label>
                          <input type="text" class="form-control @error('name') is-invalid @enderror "  name="name" value="{{ old('name') ?? $author->name }}">
                          @error('name')
                          <span  class="error invalid-feedback">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
@endsection
