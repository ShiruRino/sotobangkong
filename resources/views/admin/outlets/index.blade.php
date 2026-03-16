@extends('adminlte::page')

@section('title', 'Kelola Cabang / Outlet')

@section('content_header')
    <h1>Kelola Daftar Cabang (Outlet)</h1>
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
                <h3 class="card-title">Daftar Outlet</h3>
                <div class="card-tools">
                    <a href="{{ route('outlets.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Outlet
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Foto</th>
                            <th>Nama Outlet</th>
                            <th>Wilayah</th>
                            <th>Jam Buka</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($outlets as $outlet)
                            <tr>
                                <td>{{ $outlet->sort_order }}</td>
                                <td>
                                    @if($outlet->image)
                                        <img src="{{ asset('storage/' . $outlet->image) }}" width="60" style="border-radius: 5px;">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td>{{ $outlet->name }}</td>
                                <td><span class="badge badge-info">{{ $outlet->region }}</span></td>
                                <td>{{ $outlet->opening_hours }}</td>
                                <td>{!! $outlet->is_active ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Nonaktif</span>' !!}</td>
                                <td>
                                    <a href="{{ route('outlets.edit', $outlet->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('outlets.destroy', $outlet->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus cabang ini?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Belum ada data cabang.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop