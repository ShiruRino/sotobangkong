@extends('adminlte::page')

@section('title', 'Kotak Masuk')

@section('content_header')
    <h1>Kotak Masuk Pesan Pelanggan</h1>
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
                <h3 class="card-title">Daftar Pesan</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Nama Pengirim</th>
                            <th>Subjek</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $msg)
                            <tr class="{{ $msg->is_read ? '' : 'bg-light' }}">
                                <td>
                                    @if($msg->is_read)
                                        <span class="badge badge-success">Sudah Dibaca</span>
                                    @else
                                        <span class="badge badge-danger"><i class="fas fa-envelope"></i> Baru</span>
                                    @endif
                                </td>
                                <td class="{{ $msg->is_read ? '' : 'font-weight-bold' }}">
                                    {{ $msg->created_at->format('d M Y, H:i') }}
                                </td>
                                <td class="{{ $msg->is_read ? '' : 'font-weight-bold' }}">
                                    {{ $msg->name }}
                                </td>
                                <td class="{{ $msg->is_read ? '' : 'font-weight-bold' }}">
                                    {{ Str::limit($msg->subject, 30) }}
                                </td>
                                <td>
                                    <a href="{{ route('messages.show', $msg->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i> Buka Pesan
                                    </a>
                                    <form action="{{ route('messages.destroy', $msg->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pesan ini?');">
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
                                <td colspan="5" class="text-center">Belum ada pesan masuk.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop