@extends('adminlte::page')

@section('title', 'Tambah Fun Fact')

@section('content_header')
    <h1>Tambah Fun Fact</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Data</h3>
            </div>
            
            <form action="{{ route('fun-facts.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="number">Angka Pencapaian</label>
                        <input type="number" class="form-control @error('number') is-invalid @enderror" id="number" name="number" value="{{ old('number') }}" required placeholder="Contoh: 15">
                        <small class="text-muted">Hanya masukkan angka agar animasi counter berfungsi.</small>
                        @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Teks Utama</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required placeholder="Contoh: Tahun">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Teks Sorotan / Span (Opsional)</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}" placeholder="Contoh: Berdiri">
                        <small class="text-muted">Teks ini akan memiliki warna berbeda sesuai desain tema Anda.</small>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Data Ini</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('fun-facts.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop