@extends('adminlte::page')

@section('title', 'Kelola Galeri')

@section('content_header')
    <h1>Kelola Galeri Foto</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Foto Galeri</h3>
                <div class="card-tools">
                    <a href="{{ route('galleries.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Foto
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Foto</th>
                            <th>Judul</th>
                            <th>Sub-judul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($galleries as $gallery)
                            <tr>
                                <td>{{ $gallery->sort_order }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $gallery->image) }}" width="80" style="border-radius: 5px;">
                                </td>
                                <td>{{ $gallery->title }}</td>
                                <td>{{ $gallery->subtitle }}</td>
                                <td>{!! $gallery->is_active ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Nonaktif</span>' !!}</td>
                                <td>
                                    <a href="{{ route('galleries.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus foto ini dari galeri?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Belum ada foto di galeri.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop