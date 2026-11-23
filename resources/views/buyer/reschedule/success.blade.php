@extends('layouts.placeholder')
@section('page-title', 'Reschedule Berhasil')
@section('user-role', 'buyer')
@section('active-nav', 'pesanan')
@section('content')
<div class="status-view"><div class="status-icon success"><svg class="icon " aria-hidden="true"><use href="#i-check-circle"></use></svg></div><h1>Reschedule Berhasil!</h1><p>Tiket perjalanan Anda telah diperbarui. Silakan tinjau detail terbaru di bawah ini.</p><section class="card "><div class="flex-between"><span class="pill success">Dikonfirmasi</span><b>TRV-882910-ID</b></div><div class="route-box"><div class="route-line"><div><strong>Surabaya</strong><small>SBY · Kota Asal</small></div><div class="route-middle"><span>2j 30m</span><svg class="icon " aria-hidden="true"><use href="#i-arrow-right"></use></svg></div><div class="text-right"><strong>Malang</strong><small>MLG · Tujuan</small></div></div><div class="route-meta"><span><svg class="icon " aria-hidden="true"><use href="#i-calendar"></use></svg> Sabtu, 24 Oktober 2026</span><span><svg class="icon " aria-hidden="true"><use href="#i-clock"></use></svg> 14:00 – 16:30</span></div><div class="route-bottom"><span>Harga mulai</span><strong>Rp 125.000</strong></div></div><div class="bill"><span>Nama Penumpang</span><b>Zayn Malik</b></div></section><a class="btn outline block" href="{{ url('/preview/buyer/home') }}" >Kembali ke Beranda</a></div>
@endsection
