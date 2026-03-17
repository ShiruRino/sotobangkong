@extends('adminlte::page')

@section('title', 'Kelola Layanan')

@section('content_header')
    <h1>Kelola Layanan (Services)</h1>
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
                <h3 class="card-title">Daftar Layanan</h3>
                <div class="card-tools d-flex">
                    <form action="{{ route('services.load-defaults') }}" method="POST" class="mr-2" onsubmit="return confirm('Muat data default? Ini akan menambahkan 3 layanan bawaan ke database Anda.');">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm">
                            <i class="fas fa-sync-alt"></i> Load Default Services
                        </button>
                    </form>
                    
                    <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Layanan
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Icon</th>
                            <th>Judul Layanan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                            <tr>
                                <td>{{ $service->sort_order }}</td>
                                <td>
                                    <i class="{{ $service->icon_class }} fa-lg"></i> 
                                    <small class="text-muted ml-1">({{ $service->icon_class }})</small>
                                </td>
                                <td>{{ $service->title }}</td>
                                <td>
                                    @if($service->is_active)
                                        <span class="badge badge-success">Aktif</span>
                                    @else
                                        <span class="badge badge-danger">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus layanan ini?');">
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
                                <td colspan="5" class="text-center">Belum ada data layanan. Silakan muat default atau tambah baru.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop