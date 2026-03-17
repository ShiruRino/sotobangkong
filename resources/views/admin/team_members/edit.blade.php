@extends('adminlte::page')

@section('title', 'Edit Anggota Tim')

@section('content_header')
    <h1>Edit Anggota Tim</h1>
@stop

@section('content')
<div class="card card-warning">
    <form action="{{ route('team-members.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card-body row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Lengkap / Panggilan</label>
                    <input type="text" class="form-control" name="name" value="{{ $teamMember->name }}" required>
                </div>
                <div class="form-group">
                    <label>Posisi / Jabatan</label>
                    <input type="text" class="form-control" name="position" value="{{ $teamMember->position }}" required>
                </div>
                <div class="form-group">
                    <label>Foto Anggota</label><br>
                    @if($teamMember->image)
                        <img src="{{ asset('storage/' . $teamMember->image) }}" width="120" class="mb-2 rounded">
                    @endif
                    <input type="file" class="form-control-file" name="image" accept="image/*">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah foto.</small>
                </div>
                <div class="form-group mt-4">
                    <label>Urutan & Status</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control mr-3" name="sort_order" value="{{ $teamMember->sort_order }}" style="width: 100px;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ $teamMember->is_active ? 'checked' : '' }}>
                            <label class="custom-control-label" for="is_active">Aktif</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Update</button>
            <a href="{{ route('team-members.index') }}" class="btn btn-default float-right">Batal</a>
        </div>
    </form>
</div>
@stop