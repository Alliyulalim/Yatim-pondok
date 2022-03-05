@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Pengasuh</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#pengasuh').DataTable();
        });
    </script>
    <script src="{{asset('js/delete.js')}}"></script>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Pengasuh</h4>
                        <a href="{{ route('pengasuh.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="pengasuh">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Pengasuh</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($pengasuh as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_pengasuh }}</td>
                                        <td>{{ $data->jk }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>
                                            <form action="{{ route('pengasuh.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('pengasuh.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('pengasuh.show', $data->id) }}"
                                                        class="btn btn-outline-warning">Show</a>
                                                        <button type="submit"
                                                        class="btn btn-danger delete-confirm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

