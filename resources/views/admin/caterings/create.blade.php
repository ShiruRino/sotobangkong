@extends('adminlte::page')

@section('title', 'Tambah Dokumentasi Catering')

@section('content_header')
    <h1>Tambah Dokumentasi Catering</h1>
@stop

@section('content')
<div class="card card-primary">
    <form action="{{ route('caterings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Judul Dokumentasi / Paket</label>
                    <input type="text" class="form-control" name="title" placeholder="Contoh: Stall / Pondokan Soto" required>
                </div>
                <div class="form-group">
                    <label>Keterangan Acara (Sub-judul)</label>
                    <input type="text" class="form-control" name="subtitle" placeholder="Contoh: Paket Pernikahan">
                </div>
                <div class="form-group">
                    <label>File Foto</label>
                    <input type="file" class="form-control-file" name="image" accept="image/*" required>
                </div>
                <div class="form-group mt-4">
                    <label>Urutan & Status</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control mr-3" name="sort_order" value="0" style="width: 100px;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                            <label class="custom-control-label" for="is_active">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan Dokumentasi</button>
            <a href="{{ route('caterings.index') }}" class="btn btn-default float-right">Batal</a>
        </div>
    </form>
</div>
@stop