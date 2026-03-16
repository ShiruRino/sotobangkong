@extends('adminlte::page')

@section('title', 'Kelola Home Slider')

@section('content_header')
    <h1>Kelola Home Slider</h1>
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
                <h3 class="card-title">Daftar Slider</h3>
                <div class="card-tools">
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Slider
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Background</th>
                            <th>Heading (Highlight)</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sliders as $slider)
                            <tr>
                                <td>{{ $slider->sort_order }}</td>
                                <td>
                                    @if($slider->background_image)
                                        <img src="{{ asset('storage/' . $slider->background_image) }}" alt="BG" width="80" class="img-thumbnail">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>
                                <td>{{ $slider->heading_highlight }}</td>
                                <td>
                                    @if($slider->is_active)
                                        <span class="badge badge-success">Aktif</span>
                                    @else
                                        <span class="badge badge-danger">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus slider ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data slider.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop