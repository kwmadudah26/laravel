@extends('layouts.template')
@section('tittle', 'Form Barang')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Edit Barang</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                @include('alert')
                <form class="form form-vertical" method="post" action="{{ route('barang.update', $barang->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama">Kriteria <small class="text-danger">*</small></label>
                                    <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                     name="nama" placeholder="Masukkan Nama Barang" value="{{ $barang->nama_barang }}">
                                </div>
                                @error('nama') <small><i class="text-danger">{{ $message }}</i></small> @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="stok">Stok <small class="text-danger">*</small></label>
                                    <input type="number" min=0 id="Stok" class="form-control" name="stok"
                                    placeholder="Stok" required value="{{ $bobot->stok }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" row=5 name="keterangan">{{$barang->keterangan }}</textarea>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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
