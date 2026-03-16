@extends('adminlte::page')

@section('title', 'Kelola Testimoni')

@section('content_header')
    <h1>Kelola Testimoni Pelanggan</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Testimoni</h3>
                <div class="card-tools">
                    <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Testimoni</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Nama</th>
                            <th>Status/Peran</th>
                            <th>Isi Ulasan</th>
                            <th>Status Tampil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testi)
                            <tr>
                                <td>{{ $testi->sort_order }}</td>
                                <td>{{ $testi->name }}</td>
                                <td>{{ $testi->role }}</td>
                                <td class="text-truncate" style="max-width: 200px;">{{ $testi->content }}</td>
                                <td>{!! $testi->is_active ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Nonaktif</span>' !!}</td>
                                <td>
                                    <a href="{{ route('testimonials.edit', $testi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('testimonials.destroy', $testi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus testimoni ini?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop