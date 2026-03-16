@extends('adminlte::page')

@section('title', 'Edit Foto Galeri')

@section('content_header')
    <h1>Edit Foto Galeri</h1>
@stop

@section('content')
<div class="card card-warning">
    <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Judul Foto</label>
                    <input type="text" class="form-control" name="title" value="{{ $gallery->title }}" required>
                </div>
                <div class="form-group">
                    <label>Teks Bawah (Sub-judul)</label>
                    <input type="text" class="form-control" name="subtitle" value="{{ $gallery->subtitle }}">
                </div>
                <div class="form-group">
                    <label>File Foto</label><br>
                    <img src="{{ asset('storage/' . $gallery->image) }}" width="150" class="mb-2 rounded">
                    <input type="file" class="form-control-file" name="image" accept="image/*">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                </div>
                <div class="form-group mt-4">
                    <label>Urutan & Status</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control mr-3" name="sort_order" value="{{ $gallery->sort_order }}" style="width: 100px;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ $gallery->is_active ? 'checked' : '' }}>
                            <label class="custom-control-label" for="is_active">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Update Galeri</button>
            <a href="{{ route('galleries.index') }}" class="btn btn-default float-right">Batal</a>
        </div>
    </form>
</div>
@stop