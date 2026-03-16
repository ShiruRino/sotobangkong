@extends('adminlte::page')

@section('title', 'Pengaturan Choose Us')

@section('content_header')
    <h1>Pengaturan Utama "Kenapa Memilih Kami"</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        @endif

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Teks & Gambar</h3>
            </div>
            
            <form action="{{ url('admin/choose-us-setting') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="subtitle">Sub-Judul (Atas)</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $setting->subtitle) }}" placeholder="Contoh: Cita Rasa Warisan Nusantara">
                    </div>

                    <div class="form-group">
                        <label for="title">Judul Utama (Bawah)</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $setting->title) }}" placeholder="Contoh: Kenapa Memilih Kami?">
                    </div>

                    <div class="form-group">
                        <label for="image">Gambar Utama (Sebelah Kiri)</label>
                        @if($setting->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $setting->image) }}" alt="Current Image" class="img-thumbnail" width="200">
                            </div>
                        @endif
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                        <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                    <a href="{{ route('choose-us-items.index') }}" class="btn btn-info float-right">Kelola Daftar Alasan -></a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop