@extends('adminlte::page')

@section('title', 'Tambah Home Slider')

@section('content_header')
    <h1>Tambah Home Slider</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Slider</h3>
            </div>
            
            <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="heading_highlight">Heading Highlight (Teks SOTOBANGKONG)</label>
                        <input type="text" class="form-control @error('heading_highlight') is-invalid @enderror" id="heading_highlight" name="heading_highlight" value="{{ old('heading_highlight') }}">
                        @error('heading_highlight') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="heading_main">Heading Utama (Teks JAKARTA)</label>
                        <input type="text" class="form-control @error('heading_main') is-invalid @enderror" id="heading_main" name="heading_main" value="{{ old('heading_main') }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Teks Tombol 1</label>
                            <input type="text" class="form-control" name="button_1_text" value="{{ old('button_1_text') }}" placeholder="Contoh: Tentang Kami">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Link Tombol 1</label>
                            <input type="text" class="form-control" name="button_1_link" value="{{ old('button_1_link') }}" placeholder="Contoh: # atau /tentang">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Teks Tombol 2</label>
                            <input type="text" class="form-control" name="button_2_text" value="{{ old('button_2_text') }}" placeholder="Contoh: Pesan Catering">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Link Tombol 2</label>
                            <input type="text" class="form-control" name="button_2_link" value="{{ old('button_2_link') }}" placeholder="Contoh: # atau /pesan">
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="background_image">Background Image</label>
                        <div class="mb-3 p-3 bg-light border rounded">
                            <p class="mb-2 text-muted"><i class="fas fa-info-circle"></i> <strong>Gambar Default:</strong> Ini adalah gambar bawaan yang akan digunakan jika Anda tidak mengunggah gambar baru.</p>
                            <img src="{{ asset('assets/images/slider/1.jpg') }}" alt="Default Background" class="img-thumbnail" style="max-height: 150px;">
                        </div>
                        <input type="file" class="form-control-file @error('background_image') is-invalid @enderror" id="background_image" name="background_image" accept="image/*">
                        @error('background_image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="right_image">Gambar Kanan (Mangkuk/Produk)</label>
                        <div class="mb-3 p-3 bg-light border rounded">
                            <p class="mb-2 text-muted"><i class="fas fa-info-circle"></i> <strong>Gambar Default:</strong> Ini adalah gambar bawaan yang akan digunakan jika Anda tidak mengunggah gambar baru.</p>
                            <img src="{{ asset('assets/images/slider/2.png') }}" alt="Default Mangkuk" class="img-thumbnail" style="max-height: 150px; background-color: #ccc;">
                        </div>
                        <input type="file" class="form-control-file @error('right_image') is-invalid @enderror" id="right_image" name="right_image" accept="image/*">
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil (Angka)</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Slider Ini</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('sliders.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop