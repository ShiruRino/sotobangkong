@extends('adminlte::page')

@section('title', 'Pengaturan Tentang Kami')

@section('content_header')
    <h1>Pengaturan Tentang Kami (Sejarah & Filosofi)</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('admin/about-setting') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Bagian 1: Sejarah</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="history_title">Judul Sejarah</label>
                                <input type="text" class="form-control" id="history_title" name="history_title" value="{{ old('history_title', $about->history_title) }}" placeholder="Contoh: SEJARAH SOTO BANGKONG">
                            </div>

                            <div class="form-group">
                                <label for="history_content">Isi Cerita Sejarah</label>
                                <textarea class="form-control" id="history_content" name="history_content" rows="6">{{ old('history_content', $about->history_content) }}</textarea>
                                <small class="text-muted">Anda bisa menggunakan tag HTML seperti <code>&lt;p&gt;</code> atau <code>&lt;strong&gt;</code> jika perlu.</small>
                            </div>

                            <div class="form-group">
                                <label for="history_image">Gambar Sejarah (Samping Kanan)</label>
                                
                                @if($about->history_image)
                                    <div class="mb-3 p-3 border rounded" style="background-color: #f8f9fa;">
                                        <p class="mb-2"><i class="fas fa-image text-primary"></i> <strong>Gambar Custom Saat Ini:</strong></p>
                                        <img src="{{ asset('storage/' . $about->history_image) }}" alt="History Image" class="img-thumbnail mb-2" style="max-height: 150px;">
                                        
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="remove_history_image" name="remove_history_image" value="1">
                                            <label class="custom-control-label text-danger" for="remove_history_image">Hapus gambar ini dan kembali ke Default</label>
                                        </div>
                                    </div>
                                @else
                                    <div class="mb-3 p-3 bg-light border rounded">
                                        <p class="mb-2 text-muted"><i class="fas fa-info-circle"></i> <strong>Gambar Default Aktif:</strong> Saat ini menggunakan gambar bawaan.</p>
                                        <img src="{{ asset('assets/images/about/1.jpg') }}" alt="Default History" class="img-thumbnail" style="max-height: 150px;">
                                    </div>
                                @endif

                                <input type="file" class="form-control-file" id="history_image" name="history_image" accept="image/*">
                                <small class="text-muted">Upload gambar baru jika ingin mengganti gambar yang sedang aktif.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Bagian 2: Filosofi Rasa</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="philosophy_title">Judul Filosofi</label>
                                <input type="text" class="form-control" id="philosophy_title" name="philosophy_title" value="{{ old('philosophy_title', $about->philosophy_title) }}" placeholder="Contoh: FILOSOFI RASA">
                            </div>

                            <div class="form-group">
                                <label for="philosophy_content">Isi Filosofi</label>
                                <textarea class="form-control" id="philosophy_content" name="philosophy_content" rows="6">{{ old('philosophy_content', $about->philosophy_content) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="philosophy_image">Gambar Filosofi (Samping Kiri)</label>
                                
                                @if($about->philosophy_image)
                                    <div class="mb-3 p-3 border rounded" style="background-color: #f8f9fa;">
                                        <p class="mb-2"><i class="fas fa-image text-warning"></i> <strong>Gambar Custom Saat Ini:</strong></p>
                                        <img src="{{ asset('storage/' . $about->philosophy_image) }}" alt="Philosophy Image" class="img-thumbnail mb-2" style="max-height: 150px;">
                                        
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" id="remove_philosophy_image" name="remove_philosophy_image" value="1">
                                            <label class="custom-control-label text-danger" for="remove_philosophy_image">Hapus gambar ini dan kembali ke Default</label>
                                        </div>
                                    </div>
                                @else
                                    <div class="mb-3 p-3 bg-light border rounded">
                                        <p class="mb-2 text-muted"><i class="fas fa-info-circle"></i> <strong>Gambar Default Aktif:</strong> Saat ini menggunakan gambar bawaan.</p>
                                        <img src="{{ asset('assets/images/about/2.jpg') }}" alt="Default Philosophy" class="img-thumbnail" style="max-height: 150px;">
                                    </div>
                                @endif

                                <input type="file" class="form-control-file" id="philosophy_image" name="philosophy_image" accept="image/*">
                                <small class="text-muted">Upload gambar baru jika ingin mengganti gambar yang sedang aktif.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                        <i class="fas fa-save"></i> Simpan Semua Pengaturan "Tentang Kami"
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@stop