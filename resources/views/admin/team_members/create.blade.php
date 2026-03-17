@extends('adminlte::page')

@section('title', 'Tambah Anggota Tim')

@section('content_header')
    <h1>Tambah Anggota Tim Baru</h1>
@stop

@section('content')
<div class="card card-primary">
    <form action="{{ route('team-members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Lengkap / Panggilan</label>
                    <input type="text" class="form-control" name="name" placeholder="Contoh: Pak Yanto" required>
                </div>
                <div class="form-group">
                    <label>Posisi / Jabatan</label>
                    <input type="text" class="form-control" name="position" placeholder="Contoh: Kepala Dapur" required>
                </div>
                <div class="form-group">
                    <label>Foto Anggota</label>
                    <input type="file" class="form-control-file" name="image" accept="image/*" required>
                    <small class="text-muted">Sebaiknya gunakan foto dengan rasio kotak (1:1) atau potrait.</small>
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
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('team-members.index') }}" class="btn btn-default float-right">Batal</a>
        </div>
    </form>
</div>
@stop