@extends('layouts.placeholder')
@section('page-title', 'Notifikasi Pesanan')
@section('user-role', 'buyer')
@section('active-nav', 'notifikasi')
@section('content')
<div class="section-heading "><h1>Notifikasi</h1><p>Informasi terbaru tentang pemesanan Anda.</p></div><a class="notif-card" href="{{ url('/preview/buyer/booking/my-bookings') }}"><span class="notif-icon"><svg class="icon " aria-hidden="true"><use href="#i-check-circle"></use></svg></span><div class="notif-body"><small>TRANSAKSI · 2 JAM LALU</small><b>Pesanan Berhasil</b><p>Tiket perjalanan Jakarta ke Yogyakarta telah diterbitkan. Selamat menikmati perjalanan Anda!</p></div><i class="unread-dot"></i></a><a class="notif-card" href="{{ url('/preview/buyer/profile/edit') }}"><span class="notif-icon"><svg class="icon " aria-hidden="true"><use href="#i-user"></use></svg></span><div class="notif-body"><small>SISTEM</small><b>Lengkapi Profil Anda</b><p>Lengkapi profil Anda untuk pengalaman booking yang lebih cepat.</p></div><i class="unread-dot"></i></a><a class="btn outline block" href="{{ url('/preview/buyer/notifications/index') }}" >Kembali ke Semua Notifikasi</a>
@endsection
