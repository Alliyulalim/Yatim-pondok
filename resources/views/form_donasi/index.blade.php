@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Donatur</h1>
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
            $('#form_donasi').DataTable();
        });
    </script>
    {{-- <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script> --}}
@endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Donatur</h4>
                        <a href="{{ route('form_donasi.create') }}" class="btn btn-sm btn-outline-primary float-right">Tambah
                            Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="form_donasi">
                                <thead>
                                       <tr>
                                        <th>NO</th>
                                        <th>Nama Donatur</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Nominal</th>
                                        <th>Tanggal Transfer</th>
                                        <th>Nama Bank</th>
                                        <th>No. Rekening</th>
                                        <th>Tranfer ke Bank</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php $no=1; @endphp
                                    @foreach ($form_donasi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_donatur}}</td>
                                        <td>{{ $data->email}}</td>
                                        <td>{{ $data->no_tlp}}</td>
                                        <td>{{ $data->nominal}}</td>
                                        <td>{{ $data->tgl_transfer}}</td>
                                        <td>{{ $data->nama_bank}}</td>
                                        <td>{{ $data->no_rek}}</td>
                                        <td>{{ $data->transfer_kebank}}</td>
                                        <td>
                                            <form action="{{ route('form_donasi.destroy', $data->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('form_donasi.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('form_donasi.show', $data->id) }}"
                                                    class="btn btn-outline-warning">Show</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
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
    </div>
@endsection


