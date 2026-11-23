@extends('layouts.placeholder')
@section('page-title', 'Notifikasi Seller')
@section('user-role', 'seller')
@section('active-nav', 'notifikasi')
@section('content')
<div class="section-heading "><h1>Notifikasi Seller</h1><p>Informasi terbaru dari operasional travel.</p></div><a class="notif-card" href="{{ url('/preview/seller/orders/detail') }}"><span class="notif-icon"><svg class="icon " aria-hidden="true"><use href="#i-ticket"></use></svg></span><div class="notif-body"><small>TRANSAKSI · SEKARANG</small><b>Pesanan Baru Masuk</b><p>TRV-88301 menunggu konfirmasi.</p></div><i class="unread-dot"></i></a><a class="notif-card" href="{{ url('/preview/seller/drivers/assign') }}"><span class="notif-icon"><svg class="icon " aria-hidden="true"><use href="#i-truck"></use></svg></span><div class="notif-body"><small>OPERASIONAL · HARI INI</small><b>Penugasan Driver</b><p>Jadwal 14:00 memerlukan driver.</p></div><i class="unread-dot"></i></a><a class="notif-card" href="{{ url('/preview/seller/reviews/detail') }}"><span class="notif-icon"><svg class="icon " aria-hidden="true"><use href="#i-star"></use></svg></span><div class="notif-body"><small>ULASAN · KEMARIN</small><b>Testimoni Baru</b><p>Zayn Malik memberikan rating 5 bintang.</p></div><i class="unread-dot"></i></a>
@endsection
