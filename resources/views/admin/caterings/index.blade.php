@extends('adminlte::page')

@section('title', 'Kelola Catering')

@section('content_header')
    <h1>Kelola Dokumentasi Catering</h1>
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
                <h3 class="card-title">Daftar Paket & Dokumentasi</h3>
                <div class="card-tools">
                    <a href="{{ route('caterings.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Dokumentasi
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Foto</th>
                            <th>Judul Acara / Paket</th>
                            <th>Sub-judul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($caterings as $catering)
                            <tr>
                                <td>{{ $catering->sort_order }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $catering->image) }}" width="80" style="border-radius: 5px;">
                                </td>
                                <td>{{ $catering->title }}</td>
                                <td>{{ $catering->subtitle }}</td>
                                <td>{!! $catering->is_active ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Nonaktif</span>' !!}</td>
                                <td>
                                    <a href="{{ route('caterings.edit', $catering->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('caterings.destroy', $catering->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus dokumentasi ini?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Belum ada dokumentasi catering.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop