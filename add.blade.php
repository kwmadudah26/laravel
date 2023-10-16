@extends('layouts.template')
@section('tittle', 'Form Barang')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Tambah Barang</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                @include('alert')
                <form class="form form-vertical" method="post" action="{{ route('barang.store') }}">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama">Nama Barang <small class="text-danger">*</small></label>
                                    <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                     name="nama" placeholder="Masukkan Nama Barang" value="{{ old('nama') }}">
                                </div>
                                @error('nama') <small><i class="text-danger">{{ $message }}</i></small> @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="stok">Stok <small class="text-danger">*</small></label>
                                    <input type="number" min=0 id="Stok" class="form-control" name="stok"
                                    placeholder="Stok" required value="{{ old('stok') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" row=5 name="keterangan">{{ old('keterangan') }}</textarea>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
