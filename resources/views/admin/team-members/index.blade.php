@extends('adminlte::page')

@section('title', 'Kelola Tim')

@section('content_header')
    <h1>Kelola Anggota Tim (Di Balik Dapur)</h1>
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
                <h3 class="card-title">Daftar Anggota Tim</h3>
                <div class="card-tools">
                    <a href="{{ route('team-members.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Anggota
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
                            <th>Posisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($teamMembers as $member)
                            <tr>
                                <td>{{ $member->sort_order }}</td>
                                <td>
                                    @if($member->image)
                                        <img src="{{ asset('storage/' . $member->image) }}" width="60" style="border-radius: 5px;">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>
                                <td><strong>{{ $member->name }}</strong></td>
                                <td>{{ $member->position }}</td>
                                <td>{!! $member->is_active ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Nonaktif</span>' !!}</td>
                                <td>
                                    <a href="{{ route('team-members.edit', $member->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('team-members.destroy', $member->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus anggota tim ini?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Belum ada data anggota tim.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="alert alert-info">
            <i class="fas fa-info-circle"></i> <strong>Catatan:</strong> Anggota tim dengan <b>urutan pertama (paling atas)</b> akan ditampilkan dengan ukuran besar di sebelah kiri pada halaman depan.
        </div>
    </div>
</div>
@stop