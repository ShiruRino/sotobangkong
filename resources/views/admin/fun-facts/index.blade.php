@extends('adminlte::page')

@section('title', 'Kelola Fun Fact')

@section('content_header')
    <h1>Kelola Angka Pencapaian (Fun Fact)</h1>
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
                <h3 class="card-title">Daftar Fun Fact</h3>
                <div class="card-tools">
                    <a href="{{ route('fun-facts.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Angka</th>
                            <th>Teks Utama</th>
                            <th>Teks Sorotan (Span)</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($funFacts as $fact)
                            <tr>
                                <td>{{ $fact->sort_order }}</td>
                                <td><h4 class="m-0 text-bold">{{ $fact->number }}</h4></td>
                                <td>{{ $fact->title }}</td>
                                <td>{{ $fact->subtitle }}</td>
                                <td>
                                    @if($fact->is_active)
                                        <span class="badge badge-success">Aktif</span>
                                    @else
                                        <span class="badge badge-danger">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('fun-facts.edit', $fact->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('fun-facts.destroy', $fact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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
                                <td colspan="6" class="text-center">Belum ada data Fun Fact.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop