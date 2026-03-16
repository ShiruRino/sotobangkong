@extends('adminlte::page')

@section('title', 'Detail Pesan')

@section('content_header')
    <h1>Baca Pesan</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Pesan dari: <strong>{{ $message->name }}</strong></h3>
                <div class="card-tools">
                    <span class="text-muted"><i class="far fa-clock"></i> {{ $message->created_at->format('d F Y, H:i') }}</span>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="mailbox-read-info">
                    <h5>Subjek: {{ $message->subject }}</h5>
                    <h6>
                        Email: {{ $message->email }} <br>
                        Telepon/WA: {{ $message->phone }}
                    </h6>
                </div>
                <div class="mailbox-read-message" style="padding: 20px;">
                    <p>{!! nl2br(e($message->message)) !!}</p>
                </div>
            </div>
            <div class="card-footer">
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $message->phone) }}" target="_blank" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> Balas via WhatsApp
                </a>
                <a href="mailto:{{ $message->email }}" class="btn btn-info">
                    <i class="fas fa-reply"></i> Balas via Email
                </a>
                <a href="{{ route('messages.index') }}" class="btn btn-default float-right">Kembali</a>
            </div>
        </div>
    </div>
</div>
@stop