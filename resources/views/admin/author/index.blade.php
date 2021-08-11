@extends('layouts.admin.master')

@section('content')
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
                                    <th>kode</th>
                                    <th>Browser</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($author as $auth)
                                <tr>
                                    <td>{{ $auth->kode_author }}</td>
                                    <td>{{ $auth->name }} </td>
                                   
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
{{-- 
@push('scripts')
    <script>
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

    </script>
@endpush --}}
