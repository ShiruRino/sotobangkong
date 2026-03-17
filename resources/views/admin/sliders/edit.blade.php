@extends('adminlte::page')

@section('title', 'Edit Home Slider')

@section('content_header')
    <h1>Edit Home Slider</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Slider</h3>
            </div>
            
            <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="heading_highlight">Heading Highlight</label>
                        <input type="text" class="form-control @error('heading_highlight') is-invalid @enderror" id="heading_highlight" name="heading_highlight" value="{{ old('heading_highlight', $slider->heading_highlight) }}">
                        @error('heading_highlight') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="heading_main">Heading Utama</label>
                        <input type="text" class="form-control" id="heading_main" name="heading_main" value="{{ old('heading_main', $slider->heading_main) }}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $slider->description) }}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Teks Tombol 1</label>
                            <input type="text" class="form-control" name="button_1_text" value="{{ old('button_1_text', $slider->button_1_text) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Link Tombol 1</label>
                            <input type="text" class="form-control" name="button_1_link" value="{{ old('button_1_link', $slider->button_1_link) }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Teks Tombol 2</label>
                            <input type="text" class="form-control" name="button_2_text" value="{{ old('button_2_text', $slider->button_2_text) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Link Tombol 2</label>
                            <input type="text" class="form-control" name="button_2_link" value="{{ old('button_2_link', $slider->button_2_link) }}">
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="background_image">Background Image</label>
                        
                        @if($slider->background_image)
                            <div class="mb-3 p-3 border rounded" style="background-color: #f8f9fa;">
                                <p class="mb-2"><i class="fas fa-image text-primary"></i> <strong>Gambar Custom Saat Ini:</strong></p>
                                <img src="{{ asset('storage/' . $slider->background_image) }}" alt="Current BG" class="img-thumbnail mb-2" style="max-height: 150px;">
                                
                                <div class="custom-control custom-checkbox mt-2">
                                    <input type="checkbox" class="custom-control-input" id="remove_background_image" name="remove_background_image" value="1">
                                    <label class="custom-control-label text-danger" for="remove_background_image">Hapus gambar custom ini dan kembali ke Default</label>
                                </div>
                            </div>
                        @else
                            <div class="mb-3 p-3 bg-light border rounded">
                                <p class="mb-2 text-muted"><i class="fas fa-info-circle"></i> <strong>Gambar Default Aktif:</strong> Saat ini slider menggunakan gambar bawaan.</p>
                                <img src="{{ asset('assets/images/slider/1.jpg') }}" alt="Default Background" class="img-thumbnail" style="max-height: 150px;">
                            </div>
                        @endif

                        <input type="file" class="form-control-file @error('background_image') is-invalid @enderror" id="background_image" name="background_image" accept="image/*">
                        <small class="text-muted">Upload gambar baru untuk mengganti gambar yang sedang aktif.</small>
                    </div>

                    <div class="form-group mt-4">
                        <label for="right_image">Gambar Kanan (Mangkuk/Produk)</label>
                        
                        @if($slider->right_image)
                            <div class="mb-3 p-3 border rounded" style="background-color: #f8f9fa;">
                                <p class="mb-2"><i class="fas fa-image text-primary"></i> <strong>Gambar Custom Saat Ini:</strong></p>
                                <img src="{{ asset('storage/' . $slider->right_image) }}" alt="Current Right Image" class="img-thumbnail mb-2" style="max-height: 150px;">
                                
                                <div class="custom-control custom-checkbox mt-2">
                                    <input type="checkbox" class="custom-control-input" id="remove_right_image" name="remove_right_image" value="1">
                                    <label class="custom-control-label text-danger" for="remove_right_image">Hapus gambar custom ini dan kembali ke Default</label>
                                </div>
                            </div>
                        @else
                            <div class="mb-3 p-3 bg-light border rounded">
                                <p class="mb-2 text-muted"><i class="fas fa-info-circle"></i> <strong>Gambar Default Aktif:</strong> Saat ini slider menggunakan gambar bawaan.</p>
                                <img src="{{ asset('assets/images/slider/2.png') }}" alt="Default Mangkuk" class="img-thumbnail" style="max-height: 150px; background-color: #ccc;">
                            </div>
                        @endif

                        <input type="file" class="form-control-file @error('right_image') is-invalid @enderror" id="right_image" name="right_image" accept="image/*">
                        <small class="text-muted">Upload gambar baru untuk mengganti gambar yang sedang aktif.</small>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $slider->sort_order) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $slider->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Slider Ini</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update Slider</button>
                    <a href="{{ route('sliders.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop