@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Anak</div>
                    <div class="card-body">
                        <form action="{{ route('anak_asuh.update', $anak_asuh->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Pilih Nama Pengasuh</label>
                                <input type="text" name="nama_pengasuh" value="{{ $anak_asuh->nama_pengasuh }}"
                                    class="form-control @error('nama_pengasuh') is-invalid @enderror">
                                @error('nama_pengasuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Anak</label>
                                <input type="text" name="nama_anak" value="{{ $anak_asuh->nama_anak }}"
                                    class="form-control @error('nama_anak') is-invalid @enderror">
                                @error('nama_anak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">jenis kelamin</label>
                                <input type="radio" name="jk" class="form-check" value="laki-laki @error('jk') is-invalid @enderror">laki-laki
                                <input type="radio" name="jk" class="form-check" value="perempuan @error('jk') is-invalid @enderror">perempuan
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tempat, tanggal lahir</label>
                                <input type="text" name="tgl_lahir" value="{{ $anak_asuh->tgl_lahir }}"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Masukan status</label>
                                <input type="text" name="status" value="{{ $anak_asuh->status }}"
                                    class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
