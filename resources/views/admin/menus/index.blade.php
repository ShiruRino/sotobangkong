@extends('adminlte::page')

@section('title', 'Kelola Menu')

@section('content_header')
    <h1>Kelola Menu Makanan & Minuman</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Menu</h3>
                <div class="card-tools">
                    <a href="{{ route('menus.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Menu</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Urutan</th>
                            <th>Foto</th>
                            <th>Nama Menu</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{ $menu->sort_order }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $menu->image) }}" width="60" style="border-radius: 5px;">
                                </td>
                                <td>{{ $menu->title }}</td>
                                <td>{{ $menu->price_text }}</td>
                                <td>{!! $menu->is_active ? '<span class="badge badge-success">Aktif</span>' : '<span class="badge badge-danger">Nonaktif</span>' !!}</td>
                                <td>
                                    <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus menu ini?');">
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