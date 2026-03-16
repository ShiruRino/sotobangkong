@extends('adminlte::page')

@section('title', 'Tambah Menu')

@section('content_header')
    <h1>Tambah Menu</h1>
@stop

@section('content')
<div class="card card-primary">
    <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group"><label>Nama Menu</label><input type="text" class="form-control" name="title" required></div>
                <div class="form-group"><label>Deskripsi Pendek</label><textarea class="form-control" name="description" rows="2"></textarea></div>
                <div class="form-group"><label>Foto Menu</label><input type="file" class="form-control-file" name="image" accept="image/*" required></div>
                <div class="form-group">
                    <label>Urutan Tampil & Status</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control mr-3" name="sort_order" value="0" style="width: 100px;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                            <label class="custom-control-label" for="is_active">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-info"><i class="fas fa-info-circle"></i> Teks di bawah akan muncul saat foto menu disorot (hover).</div>
                <div class="form-group"><label>Fitur 1 (Contoh: Ayam Kampung Asli)</label><input type="text" class="form-control" name="feature_1"></div>
                <div class="form-group"><label>Fitur 2 (Contoh: Kuah Kaldu Spesial)</label><input type="text" class="form-control" name="feature_2"></div>
                <div class="form-group"><label>Fitur 3 (Contoh: Resep Warisan)</label><input type="text" class="form-control" name="feature_3"></div>
                <div class="form-group"><label>Harga (Contoh: Rp 25.000 / Porsi)</label><input type="text" class="form-control" name="price_text"></div>
            </div>
        </div>
        <div class="card-footer"><button type="submit" class="btn btn-primary">Simpan Menu</button></div>
    </form>
</div>
@stop