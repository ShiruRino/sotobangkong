@extends('adminlte::page')

@section('title', 'Edit Testimoni')

@section('content_header')
    <h1>Edit Testimoni Pelanggan</h1>
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

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Testimoni</h3>
            </div>
            
            <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Nama Pelanggan</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $testimonial->name) }}" required placeholder="Contoh: Mas Budi">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-md-6 form-group">
                            <label for="role">Peran / Status (Opsional)</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $testimonial->role) }}" placeholder="Contoh: Pelanggan Setia">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="content">Isi Ulasan</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4" required placeholder='Contoh: "Kuah sotonya gila seger banget!"'>{{ old('content', $testimonial->content) }}</textarea>
                        @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $testimonial->sort_order) }}">
                        </div>
                        <div class="col-md-6 form-group mt-4">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan di Halaman Depan</label>
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