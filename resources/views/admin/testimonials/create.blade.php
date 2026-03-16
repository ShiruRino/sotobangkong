@extends('adminlte::page')
@section('title', 'Tambah Testimoni')
@section('content_header') <h1>Tambah Testimoni</h1> @stop

@section('content')
<div class="card card-primary">
    <form action="{{ route('testimonials.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" class="form-control" name="name" required placeholder="Contoh: Mas Budi">
                </div>
                <div class="col-md-6 form-group">
                    <label>Peran / Status (Opsional)</label>
                    <input type="text" class="form-control" name="role" placeholder="Contoh: Pelanggan Setia">
                </div>
            </div>
            <div class="form-group">
                <label>Isi Ulasan</label>
                <textarea class="form-control" name="content" rows="4" required placeholder='Contoh: "Kuah sotonya gila seger banget!"'></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Urutan Tampil</label>
                    <input type="number" class="form-control" name="sort_order" value="0">
                </div>
                <div class="col-md-6 form-group mt-4">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                        <label class="custom-control-label" for="is_active">Tampilkan di Halaman Depan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer"><button type="submit" class="btn btn-primary">Simpan</button></div>
    </form>
</div>
@stop