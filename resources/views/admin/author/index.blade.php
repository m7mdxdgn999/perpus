@extends('layouts.admin.master')
@section('title', 'Penulis')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> {{ Breadcrumbs::current()->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6 ">  
                    {{ Breadcrumbs::render('admin.author.index') }}                  
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
                        <h3 class="card-title">Author</h3>                        
                    </div>
                    <a href="{{ route('admin.author.create') }}" class="btn btn-primary">Tambah Penulis</a>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>kode penulis</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($author as $auth)
                                    <tr>
                                        <td>{{ $auth->kode_author }}</td>
                                        <td>{{ $auth->name }} </td>
                                        <td>
                                            <form action="{{ route('admin.author.edit', $auth->kode_author) }}"
                                                method="get" class="float-left">
                                                <button type="submit" class="btn btn-block btn-warning"><i
                                                        class="far fa-edit"></i> Edit</button>
                                            </form>
                                            <form action="{{ route('admin.author.destroy', $auth->kode_author) }}"
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
