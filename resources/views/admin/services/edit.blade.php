@extends('adminlte::page')

@section('title', 'Edit Layanan')

@section('content_header')
    <h1>Edit Layanan</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Layanan</h3>
            </div>
            
            <form action="{{ route('services.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="icon_class">Class Icon (FontAwesome)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="{{ $service->icon_class }}"></i></div>
                            </div>
                            <input type="text" class="form-control @error('icon_class') is-invalid @enderror" id="icon_class" name="icon_class" value="{{ old('icon_class', $service->icon_class) }}">
                        </div>
                        @error('icon_class') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Judul Utama</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $service->title) }}">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="hover_title">Judul Saat Di-hover (Sorot)</label>
                        <input type="text" class="form-control" id="hover_title" name="hover_title" value="{{ old('hover_title', $service->hover_title) }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi Lengkap</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $service->description) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="link">Link Tujuan</label>
                        <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $service->link) }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $service->sort_order) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $service->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Layanan Ini</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update Layanan</button>
                    <a href="{{ route('services.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop