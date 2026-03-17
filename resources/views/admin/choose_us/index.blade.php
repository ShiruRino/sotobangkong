@extends('adminlte::page')

@section('title', 'Kenapa Memilih Kami')

@section('content_header')
    <h1>Daftar Keunggulan (Choose Us)</h1>
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
                <h3 class="card-title">Daftar Poin Keunggulan</h3>
                <div class="card-tools d-flex">
                    <form action="{{ route('choose-us-items.load-defaults') }}" method="POST" class="mr-2" onsubmit="return confirm('Muat data default? Ini akan menambahkan 3 poin keunggulan bawaan ke database Anda.');">
                        @csrf
                        <button type="submit" class="btn btn-info btn-sm">
                            <i class="fas fa-sync-alt"></i> Load Default Items
                        </button>
                    </form>
                    
                    <a href="{{ route('choose-us-items.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Item
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Icon</th>
                            <th>Judul</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($chooseUsItems as $item)
                            <tr>
                                <td>{{ $item->sort_order }}</td>
                                <td>
                                    <i class="{{ $item->icon_class }} fa-lg"></i>
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if($item->is_active)
                                        <span class="badge badge-success">Aktif</span>
                                    @else
                                        <span class="badge badge-danger">Nonaktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('choose-us-items.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('choose-us-items.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus item ini?');">
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
                                <td colspan="5" class="text-center">Belum ada data. Silakan muat default atau tambah baru.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop