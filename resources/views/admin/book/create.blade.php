@extends('layouts.admin.master')
@section('title', 'Tambah Buku')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Tambah Buku</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.book.store') }}" method="POST">
                        @csrf
                      <div class="card-body">
                        <div class="form-group ">
                          <label for="">Judul</label>
                          <input type="text" class="form-control @error('title') is-invalid @enderror "  name="title" value="{{ old('title')}} ">
                          @error('title')
                          <span  class="error invalid-feedback">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="form-group ">
                          <label for="">Deskripsi</label>
                          <textarea type="text" class="form-control @error('description') is-invalid @enderror "  name="description" value="{{ old('description')}} "> </textarea>
                          @error('description')
                          <span  class="error invalid-feedback">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="form-group ">                            
                            <div class="col-sm-6">
                              <!-- select -->
                              <div class="form-group">
                                <label for="">Penulis</label>
                                <select class="form-control @error('kode_author') is-invalid @enderror select2" name="kode_author" >
                                  @foreach($authors as $author)
                                      <option value="{{ $author->kode_author }}">{{ $author->name }}</option>
                                  @endforeach
                                </select>
                                @error('kode_author')
                                <span  class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                              </div>
                            </div>                          
                          </div>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                            <label for="">Sampul</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input  @error('kode_author') is-invalid @enderror" name="cover">
                                <label class="custom-file-label " >Choose file</label>
                                @error('cover')
                                <span  class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="card-body">
                        <div class="form-group ">
                          <label for="">Jumlah</label>
                          <input type="text" class="form-control @error('qty') is-invalid @enderror "  name="qty" value="{{ old('qty')}} ">
                          @error('qty')
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

@push('select2css')
<link rel="stylesheet" href="{{ asset('assets\plugins\select2\css\select2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets\plugins\select2\js\select2.full.min.js') }}"></script>
    <script >
        $('.select2').select2();
    </script>
@endpush
