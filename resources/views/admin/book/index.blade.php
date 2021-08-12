@extends('layouts.admin.master')
@section('title', 'Penulis')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0"> {{ Breadcrumbs::current()->title }}</h1> --}}
                </div><!-- /.col -->
                <div class="col-sm-6 ">  
                    {{-- {{ Breadcrumbs::render('admin.author.index') }}                   --}}
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"></li>                         
                    </ol> --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Penulis</h3>                        
                    </div>
                    <a href="{{ route('admin.book.create') }}" class="btn btn-primary">Tambah Buku</a>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>kode Buku</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Penulis</th>
                                    <th>Sampul</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->kode_buku }}</td>
                                        <td>{{ $book->title }} </td>
                                        <td>{{ $book->description }} </td>
                                        <td>{{ $book->name }} </td>
                                        <td>{{ $book->cover }} </td>
                                        
                                        <td>
                                            <form action="{{ route('admin.author.edit', $book->kode_buku) }}"
                                                method="get" class="float-left">
                                                <button type="submit" class="btn btn-block btn-warning"><i
                                                        class="far fa-edit"></i> Edit</button>
                                            </form>
                                            <form action="{{ route('admin.author.destroy', $book->kode_buku) }}"
                                                class="float-right" method="post" id="deleteForm">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-block btn-danger" id="delete"
                                                    onclick="Swal('hello','latihan','succes')"><i class="fas fa-trash"></i>
                                                    Hapus</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <script>
    $('button#delete').on('click',function(e)){
                e.preventDefault();
                var href =$(this).attr('href');

                Swal.fire({
                title: 'Apakah Kamu yakin hapus data ini',
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus Saja!'
                }).then((result) => {
                if (result.isConfirmed) {
                        document.getElementById('deleteForm').action=href;
                        document.getElementById('deleteForm')submit();

                        Swal.fire(
                        'Terhapus!',
                        'Data berhasil dihapus.',
                        'success'
                        )
                     }
                })
     }
</script> --}}

@push('scripts')
    {{-- <script>
        $(function() {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.author.data') }}',
                colomns: [{
                        data: 'kode_author'
                    },
                    {
                        data: 'name'
                    }
                ]
            });
        });
    </script> --}}
@endpush
