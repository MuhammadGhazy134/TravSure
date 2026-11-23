@extends('layouts.placeholder')
@section('page-title', 'Menunggu Reschedule')
@section('user-role', 'buyer')
@section('active-nav', 'home')
@section('hide-top', '1')
@section('hide-bottom', '1')
@section('main-class', 'full-main')
@section('content')
<div class="status-view waiting-view"><div class="status-icon waiting"><svg class="icon " aria-hidden="true"><use href="#i-clock"></use></svg></div><h1>Meninjau Reschedule</h1><p>Permintaan pengubahan jadwal perjalanan sedang ditinjau.</p><a class="btn white block" href="{{ url('/preview/buyer/reschedule/success') }}" >Lihat Contoh Berhasil</a><a class="btn outline-light block" href="{{ url('/preview/buyer/reschedule/rejected') }}" >Lihat Contoh Ditolak</a><a class="btn text-white block" href="{{ url('/preview/buyer/home') }}" >Kembali ke Beranda</a></div>
@endsection
