@extends('adminlte::page')

@section('title', 'Edit Fun Fact')

@section('content_header')
    <h1>Edit Fun Fact</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Form Edit Data</h3>
            </div>
            
            <form action="{{ route('fun-facts.update', $funFact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="number">Angka Pencapaian</label>
                        <input type="number" class="form-control @error('number') is-invalid @enderror" id="number" name="number" value="{{ old('number', $funFact->number) }}" required>
                        @error('number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Teks Utama</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $funFact->title) }}" required>
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Teks Sorotan / Span</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $funFact->subtitle) }}">
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6 form-group">
                            <label for="sort_order">Urutan Tampil</label>
                            <input type="number" class="form-control" id="sort_order" name="sort_order" value="{{ old('sort_order', $funFact->sort_order) }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Status Aktif</label>
                            <div class="custom-control custom-switch mt-2">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ old('is_active', $funFact->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Tampilkan Data Ini</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <a href="{{ route('fun-facts.index') }}" class="btn btn-default float-right">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop