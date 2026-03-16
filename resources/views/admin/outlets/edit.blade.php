@extends('adminlte::page')

@section('title', 'Edit Cabang')

@section('content_header')
    <h1>Edit Cabang</h1>
@stop

@section('content')
<div class="card card-warning">
    <form action="{{ route('outlets.update', $outlet->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Outlet</label>
                    <input type="text" class="form-control" name="name" value="{{ $outlet->name }}" required>
                </div>
                <div class="form-group">
                    <label>Wilayah (Kategori Filter)</label>
                    <input type="text" class="form-control" name="region" value="{{ $outlet->region }}" required>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <textarea class="form-control" name="address" rows="3" required>{{ $outlet->address }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Jam Operasional</label>
                    <input type="text" class="form-control" name="opening_hours" value="{{ $outlet->opening_hours }}" required>
                </div>
                <div class="form-group">
                    <label>Link Google Maps</label>
                    <input type="url" class="form-control" name="map_link" value="{{ $outlet->map_link }}">
                </div>
                <div class="form-group">
                    <label>Foto Outlet</label><br>
                    @if($outlet->image)
                        <img src="{{ asset('storage/' . $outlet->image) }}" width="100" class="mb-2 rounded">
                    @endif
                    <input type="file" class="form-control-file" name="image" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Urutan & Status</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control mr-3" name="sort_order" value="{{ $outlet->sort_order }}" style="width: 100px;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ $outlet->is_active ? 'checked' : '' }}>
                            <label class="custom-control-label" for="is_active">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Update Cabang</button>
            <a href="{{ route('outlets.index') }}" class="btn btn-default float-right">Batal</a>
        </div>
    </form>
</div>
@stop