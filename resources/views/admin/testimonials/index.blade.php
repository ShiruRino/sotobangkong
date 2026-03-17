@extends('adminlte::page')

@section('title', 'Kelola Testimoni')

@section('content_header')
    <h1>Kelola Testimoni Pelanggan</h1>
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
                <h3 class="card-title">Daftar Testimoni</h3>
                <div class="card-tools">
                    <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Testimoni
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Peran/Status</th>
                            <th>Status Tampil</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonials as $testi)
                            <tr>
                                <td>{{ $testi->sort_order }}</td>
                                <td>
                                    @if($testi->avatar)
                                        <img src="{{ asset('storage/' . $testi->avatar) }}" alt="Avatar" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%;">
                                    @else
                                        <img src="{{ asset('assets/images/default-avatar.png') }}" alt="Default" style="width: 50px; height: 50px; object-fit: cover; border-radius: 50%; opacity: 0.5;">
                                    @endif
                                </td>
                                <td><strong>{{ $testi->name }}</strong></td>
                                <td>{{ $testi->role }}</td>
                                <td>
                                    @if($testi->is_active)
                                        <span class="badge badge-success">Aktif</span>
                                    @else
                                        <span class="badge badge-danger">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('testimonials.edit', $testi->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('testimonials.destroy', $testi->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus testimoni ini?');">
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
                                <td colspan="6" class="text-center">Belum ada data testimoni.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop