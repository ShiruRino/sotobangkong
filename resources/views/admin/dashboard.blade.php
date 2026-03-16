@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard Admin</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $unreadMessages }}</h3>
                    <p>Pesan Belum Dibaca</p>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <a href="{{ route('messages.index') }}" class="small-box-footer">
                    Cek Kotak Masuk <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalMenus }}</h3>
                    <p>Total Menu Tersimpan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-utensils"></i>
                </div>
                <a href="{{ route('menus.index') }}" class="small-box-footer">
                    Kelola Menu <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalOutlets }}</h3>
                    <p>Cabang & Outlet</p>
                </div>
                <div class="icon">
                    <i class="fas fa-store-alt"></i>
                </div>
                <a href="{{ route('outlets.index') }}" class="small-box-footer">
                    Kelola Cabang <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalTestimonials }}</h3>
                    <p>Testimoni Pelanggan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-comments"></i>
                </div>
                <a href="{{ route('testimonials.index') }}" class="small-box-footer">
                    Lihat Testimoni <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Selamat Datang di Sistem Manajemen Konten!</h3>
                </div>
                <div class="card-body">
                    <p>Halo! Sistem panel admin ini dirancang untuk memudahkan pengelolaan konten *website* secara dinamis.</p>
                    <p>Gunakan navigasi di sebelah kiri untuk mulai mengatur <i>slider</i> halaman depan, mengubah daftar menu, memperbarui galeri kegiatan, hingga merespons pesan pelanggan yang masuk melalui formulir kontak.</p>
                    <hr>
                    <p class="mb-0 text-muted"><i class="fas fa-info-circle"></i> <b>Tips:</b> Selalu perhatikan kotak merah muda (Pesan Belum Dibaca) agar tidak ada *feedback* atau pertanyaan pelanggan yang terlewat.</p>
                </div>
            </div>
        </div>
    </div>
@stop