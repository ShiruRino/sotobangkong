@extends('adminlte::page')

@section('title', 'Pengaturan Kontak & Alamat')

@section('content_header')
    <h1>Pengaturan Kontak, Alamat & Jam Operasional</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('admin/contact-setting') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kantor Pusat & Logo</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Logo Perusahaan</label><br>
                                @if($contact->logo_image)
                                    <div class="mb-3" style="background-color: #f4f6f9; padding: 10px; border-radius: 5px; display: inline-block;">
                                        <img src="{{ asset('storage/' . $contact->logo_image) }}" alt="Logo" style="max-height: 80px;">
                                    </div><br>
                                @endif
                                <input type="file" class="form-control-file" name="logo_image" accept="image/*">
                                <small class="text-muted">Biarkan kosong jika tidak ingin mengubah logo. Disarankan menggunakan format PNG transparan.</small>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label>Judul Lokasi</label>
                                <input type="text" class="form-control" name="office_title" value="{{ old('office_title', $contact->office_title) }}" placeholder="Contoh: Kantor Pusat & Kedai Utama">
                            </div>

                            <div class="form-group">
                                <label>Alamat Baris 1 (Jalan)</label>
                                <input type="text" class="form-control" name="address_line_1" value="{{ old('address_line_1', $contact->address_line_1) }}" placeholder="Contoh: Jl. Pakubuwono VI No.39, Kebayoran Baru,">
                            </div>

                            <div class="form-group">
                                <label>Alamat Baris 2 (Kota & Kode Pos)</label>
                                <input type="text" class="form-control" name="address_line_2" value="{{ old('address_line_2', $contact->address_line_2) }}" placeholder="Contoh: Jakarta Selatan, DKI Jakarta 12120">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Kontak & Jam Operasional</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Telepon Kantor</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone', $contact->phone) }}" placeholder="Contoh: (021) 720 0000">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>WhatsApp</label>
                                    <input type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp', $contact->whatsapp) }}" placeholder="Contoh: 0812 888 47857">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label>Email Utama</label>
                                    <input type="email" class="form-control" name="email_1" value="{{ old('email_1', $contact->email_1) }}" placeholder="Contoh: halo@sotobangkongjkt.com">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>Email Alternatif</label>
                                    <input type="email" class="form-control" name="email_2" value="{{ old('email_2', $contact->email_2) }}" placeholder="Contoh: marketing@sotobangkongjkt.com">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label>Judul Jam Buka</label>
                                <input type="text" class="form-control" name="hours_title" value="{{ old('hours_title', $contact->hours_title) }}" placeholder="Contoh: Jam Operasional">
                            </div>

                            <div class="form-group">
                                <label>Jam Buka Weekday (Senin-Jumat)</label>
                                <input type="text" class="form-control" name="weekday_hours" value="{{ old('weekday_hours', $contact->weekday_hours) }}" placeholder="Contoh: Senin - Jumat: 07.30 - 21.00 WIB">
                            </div>

                            <div class="form-group">
                                <label>Jam Buka Weekend (Sabtu-Minggu)</label>
                                <input type="text" class="form-control" name="weekend_hours" value="{{ old('weekend_hours', $contact->weekend_hours) }}" placeholder="Contoh: Sabtu - Minggu: 07.00 - 22.00 WIB">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-success btn-lg btn-block">
                        <i class="fas fa-save"></i> Simpan Pengaturan Kontak
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
@stop