@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Anak</div>
                    <div class="card-body">
                        <form action="{{ route('anak_asuh.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Pengasuh</label>
                            <select name="nama_pengasuh" class="form-control @error('nama_pengasuh') is-invalid @enderror">
                                @foreach($pengasuh as $data)
                                <option value="{{$data->id}}">{{$data->nama_pengasuh}}</option>
                                @endforeach
                            </select>
                            @error('nama_pengasuh')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Anak</label>
                                <input type="text" name="nama_anak" class="form-control @error('nama_anak') is-invalid @enderror">
                                @error('nama_anak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <br>
                                <input type="radio" name="jk" class="form-check" value="laki-laki @error('jk') is-invalid @enderror">laki-laki
                                <input type="radio" name="jk" class="form-check" value="perempuan @error('jk') is-invalid @enderror">perempuan
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">tanggal lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    <label for="">Status</label>
                                    <br>
                                    <select name="status" id="status" class="form-control">
                                        <option value="yatim">Yatim</option>
                                        <option value="piatu">Piatu</option>
                                        <option value="yatim piatu">Yatim Piatu</option>
                                      </select>
                                {{-- <label for="">Status</label>
                                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
