@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Donasi</div>
                    <div class="card-body">
                        <form action="{{ route('form_donasi.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama</label>
                                <input type="text" name="nama_donatur" class="form-control @error('nama_donatur') is-invalid @enderror">
                                @error('nama_donatur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="number" name="no_tlp" class="form-control @error('no_tlp') is-invalid @enderror">
                                @error('no_tlp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nominal</label>
                                <input type="number" name="nominal" class="form-control @error('nominal') is-invalid @enderror">
                                @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <div class="form-group">
                                <label for="">tgl_transfer</label>
                                <input type="date" name="tgl_transfer" class="form-control @error('tgl_transfer') is-invalid @enderror">
                                @error('tgl_transfer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label for="">Nama Bank</label>
                            <br>
                            <select name="nama_bank" id="nama_bank" class="form-control">
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="MANDIRI">MANDIRI</option>

                              </select>
                                <div class="form-group">
                                    <label for="">no Rekening</label>
                                    <input type="number" name="no_rek" class="form-control @error('no_rek') is-invalid @enderror">
                                    @error('no_rek')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="">Transfer Ke Bank</label>
                                <br>
                                <select name="transfer_kebank" id="transfer_kebank" class="form-control">
                                    <option value=""></option>
                                    <option value="BCA">BCA</option>
                                    <option value="BRI">BRI</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="MANDIRI">MANDIRI</option>

                                  </select>
                                  <br>
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
