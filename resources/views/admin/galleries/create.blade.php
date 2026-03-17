@extends('adminlte::page')

@section('title', 'Tambah Foto Galeri')

@section('content_header')
    <h1>Tambah Foto Galeri</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Galeri</h3>
            </div>
            
            <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="title">Judul Foto *</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required placeholder="Contoh: Soto Bangkong Spesial">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Sub-judul (Teks Bawah)</label>
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" id="subtitle" name="subtitle" value="{{ old('subtitle', 'Klik untuk perbesar') }}" placeholder="Contoh: Klik untuk perbesar">
                        @error('subtitle') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">File Foto *</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
                        <small class="text-muted">Format yang didukung: JPG, JPEG, PNG, WEBP (Max: 2MB).</small>
                        @error('image') <br><span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
                            @error('sort_order') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Foto Ini</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan ke Galeri</button>
                    <a href="{{ route('galleries.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop