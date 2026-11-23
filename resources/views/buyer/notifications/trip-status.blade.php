@extends('layouts.placeholder')
@section('page-title', 'Notifikasi Status Perjalanan')
@section('user-role', 'buyer')
@section('active-nav', 'notifikasi')
@section('content')
<div class="section-heading "><h1>Notifikasi</h1><p>Status perjalanan terkini.</p></div><a class="notif-card" href="{{ url('/preview/buyer/tracking/index') }}"><span class="notif-icon"><svg class="icon " aria-hidden="true"><use href="#i-bus"></use></svg></span><div class="notif-body"><small>PERJALANAN · SEKARANG</small><b>Driver sedang menuju lokasi</b><p>Pesanan TRV-88291 sedang diproses. Driver Anda akan tiba dalam 5 menit.</p><div class="mini-map"><svg class="icon " aria-hidden="true"><use href="#i-map-pin"></use></svg> Surabaya, Jawa Timur</div></div><i class="unread-dot"></i></a><a class="btn primary block" href="{{ url('/preview/buyer/tracking/index') }}" >Pantau Driver Sekarang</a><a class="btn outline block" href="{{ url('/preview/buyer/notifications/index') }}" >Kembali ke Notifikasi</a>
@endsection
