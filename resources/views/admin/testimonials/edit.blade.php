@extends('adminlte::page')

@section('title', 'Edit Testimoni')

@section('content_header')
    <h1>Edit Testimoni</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Testimoni</h3>
            </div>
            
            <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Nama Pelanggan *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $testimonial->name) }}" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="role">Peran / Status (Opsional)</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $testimonial->role) }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content">Isi Testimoni *</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4" required>{{ old('content', $testimonial->content) }}</textarea>
                        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="avatar">Foto Profil (Avatar)</label>
                        
                        @if($testimonial->avatar)
                            <div class="mb-3 p-3 border rounded" style="background-color: #f8f9fa;">
                                <p class="mb-2"><i class="fas fa-user-circle text-primary"></i> <strong>Foto Saat Ini:</strong></p>
                                <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="Avatar" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;" class="mb-2">
                                
                                <div class="custom-control custom-checkbox mt-2">
                                    <input type="checkbox" class="custom-control-input" id="remove_avatar" name="remove_avatar" value="1">
                                    <label class="custom-control-label text-danger" for="remove_avatar">Hapus foto ini dan kembali ke Default Avatar</label>
                                </div>
                            </div>
                        @else
                            <div class="mb-3 p-3 bg-light border rounded">
                                <p class="mb-2 text-muted"><i class="fas fa-info-circle"></i> <strong>Avatar Default Aktif:</strong> Testimoni ini menggunakan foto standar.</p>
                                <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Default" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%; opacity: 0.6;">
                            </div>
                        @endif

                        <input type="file" class="form-control-file @error('avatar') is-invalid @enderror" id="avatar" name="avatar" accept="image/*">
                        <small class="text-muted">Upload gambar baru jika ingin mengganti foto profil.</small>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Testimoni Ini</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update Testimoni</button>
                    <a href="{{ route('testimonials.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop