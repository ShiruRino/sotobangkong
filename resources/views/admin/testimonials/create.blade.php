@extends('adminlte::page')

@section('title', 'Tambah Testimoni')

@section('content_header')
    <h1>Tambah Testimoni</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Testimoni</h3>
            </div>
            
            <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Nama Pelanggan *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required placeholder="Contoh: Budi Santoso">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="role">Peran / Status (Opsional)</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ old('role') }}" placeholder="Contoh: Pelanggan Setia / CEO PT Maju">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content">Isi Testimoni *</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4" required placeholder="Tulis ulasan pelanggan di sini...">{{ old('content') }}</textarea>
                        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="avatar">Foto Profil (Avatar)</label>
                        <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" id="avatar" name="avatar" accept="image/*">
                        <small class="text-muted">Rasio terbaik adalah kotak (1:1). Jika dibiarkan kosong, sistem akan menggunakan gambar avatar default.</small>
                        @error('avatar') <br><span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Testimoni Ini</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Testimoni</button>
                    <a href="{{ route('testimonials.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop