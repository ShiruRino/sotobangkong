@extends('adminlte::page')
@section('title', 'Edit Menu')
@section('content_header') <h1>Edit Menu</h1> @stop

@section('content')
<div class="card card-warning">
    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group"><label>Nama Menu</label><input type="text" class="form-control" name="title" value="{{ $menu->title }}" required></div>
                <div class="form-group"><label>Deskripsi Pendek</label><textarea class="form-control" name="description" rows="2">{{ $menu->description }}</textarea></div>
                <div class="form-group">
                    <label>Foto Menu</label><br>
                    <img src="{{ asset('storage/' . $menu->image) }}" width="100" class="mb-2 rounded">
                    <input type="file" class="form-control-file" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Urutan Tampil & Status</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control mr-3" name="sort_order" value="{{ $menu->sort_order }}" style="width: 100px;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ $menu->is_active ? 'checked' : '' }}>
                            <label class="custom-control-label" for="is_active">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-info"><i class="fas fa-info-circle"></i> Teks di bawah akan muncul saat foto menu disorot (hover).</div>
                <div class="form-group"><label>Fitur 1</label><input type="text" class="form-control" name="feature_1" value="{{ $menu->feature_1 }}"></div>
                <div class="form-group"><label>Fitur 2</label><input type="text" class="form-control" name="feature_2" value="{{ $menu->feature_2 }}"></div>
                <div class="form-group"><label>Fitur 3</label><input type="text" class="form-control" name="feature_3" value="{{ $menu->feature_3 }}"></div>
                <div class="form-group"><label>Harga</label><input type="text" class="form-control" name="price_text" value="{{ $menu->price_text }}"></div>
            </div>
        </div>
        <div class="card-footer"><button type="submit" class="btn btn-warning">Update Menu</button></div>
    </form>
</div>
@stop