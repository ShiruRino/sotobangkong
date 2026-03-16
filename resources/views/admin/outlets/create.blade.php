@extends('adminlte::page')

@section('title', 'Tambah Cabang')

@section('content_header')
    <h1>Tambah Cabang Baru</h1>
@stop

@section('content')
<div class="card card-primary">
    <form action="{{ route('outlets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Outlet</label>
                    <input type="text" class="form-control" name="name" placeholder="Contoh: Soto Bangkong - Pakubuwono" required>
                </div>
                <div class="form-group">
                    <label>Wilayah (Kategori Filter)</label>
                    <input type="text" class="form-control" name="region" placeholder="Contoh: Jakarta Selatan" required>
                    <small class="text-muted">Penulisan yang sama persis akan dikelompokkan dalam satu tombol filter yang sama.</small>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea class="form-control" name="address" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Jam Operasional</label>
                    <input type="text" class="form-control" name="opening_hours" placeholder="Contoh: Buka: 07.30 - 21.00 WIB" required>
                </div>
                <div class="form-group">
                    <label>Link Google Maps</label>
                    <input type="url" class="form-control" name="map_link" placeholder="Contoh: https://goo.gl/maps/...">
                </div>
                <div class="form-group">
                    <label>Foto Outlet</label>
                    <input type="file" class="form-control-file" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Urutan & Status</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control mr-3" name="sort_order" value="0" style="width: 100px;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                            <label class="custom-control-label" for="is_active">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan Cabang</button>
            <a href="{{ route('outlets.index') }}" class="btn btn-default float-right">Batal</a>
        </div>
    </form>
</div>
@stop