@extends('layouts.template')
@section('tittle', 'Daftar Barang')
@section('content')
@include('alert')
<section class="section">
    <div class="card">
            <div class="card-body">
                <a href="{{ route('barang.add') }}" class="btn btn-primary round"><i class="fa plus"></i>Tambah</a>
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA BARANG</th>
                        <th>STOK</th>
                        <th>KETERANGAN</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($list_barang as $barang)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$barang->nama_barang}}</td>
                        <td>{{$barang->stok}}</td>
                        <td>{{$barang->keterangan}}</td>
                        <td>
                            <a href="{{ route('barang.edit', $barang->id) }}"><span class="badge bg-success">Edit</span></a>
                            <a href="javascript:void(0)" onclick="confirmHapus('{{$barang->id}}')"
                                data-bs-target="#hapusModal"><span class="badge bg-danger">Hapus</span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModalTitle">
                    Hapus Data
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Yakin akan dihapus?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Tidak</span>
                </button>
                <form method="POST" id="formDel">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Ya</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmHapus(id) {
        var url = '{{ route("barang.delete", ":id") }}';
        url = url.replace(':id', id);
        $('#formDel').attr('action', url);
        $('#hapusModal').modal('show');
    }
</script>

@endsection
