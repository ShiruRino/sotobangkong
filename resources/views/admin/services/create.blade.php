@extends('adminlte::page')

@section('title', 'Tambah Layanan')

@section('content_header')
    <h1>Tambah Layanan</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Layanan</h3>
            </div>
            
            <form action="{{ route('services.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="icon_class">Class Icon (FontAwesome)</label>
                        <input type="text" class="form-control @error('icon_class') is-invalid @enderror" id="icon_class" name="icon_class" value="{{ old('icon_class', 'fa fa-star') }}" placeholder="Contoh: fa fa-cutlery">
                        <small class="text-muted">Gunakan class FontAwesome versi 4/5. Contoh: <code>fa fa-cutlery</code>, <code>fa fa-truck</code>, <code>fa fa-motorcycle</code>.</small>
                        @error('icon_class') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Judul Utama</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Contoh: Makan di Tempat (Dine-in)">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="hover_title">Judul Saat Di-hover (Sorot)</label>
                        <input type="text" class="form-control" id="hover_title" name="hover_title" value="{{ old('hover_title') }}" placeholder="Contoh: Dine-in Nyaman">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi Lengkap</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="link">Link Tujuan (Opsional)</label>
                        <input type="text" class="form-control" id="link" name="link" value="{{ old('link', '#') }}" placeholder="Contoh: /menu atau #">
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Layanan Ini</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('services.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop