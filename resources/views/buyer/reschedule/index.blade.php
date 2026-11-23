@extends('layouts.placeholder')
@section('page-title', 'Atur Ulang Jadwal')
@section('user-role', 'buyer')
@section('active-nav', 'pesanan')
@section('content')
<div class="section-heading "><h1>Pesanan Saya</h1><p>Tiket saat ini</p></div><section class="card "><span class="pill success">Aktif</span><div class="route-box"><div class="route-line"><div><strong>Surabaya</strong><small>SBY · Kota Asal</small></div><div class="route-middle"><span>2j 30m</span><svg class="icon " aria-hidden="true"><use href="#i-arrow-right"></use></svg></div><div class="text-right"><strong>Malang</strong><small>MLG · Tujuan</small></div></div><div class="route-meta"><span><svg class="icon " aria-hidden="true"><use href="#i-calendar"></use></svg> Sabtu, 24 Oktober 2026</span><span><svg class="icon " aria-hidden="true"><use href="#i-clock"></use></svg> 14:00 – 16:30</span></div><div class="route-bottom"><span>Harga mulai</span><strong>Rp 125.000</strong></div></div><a class="btn primary block" href="{{ url('/preview/buyer/reschedule/choose-date') }}" >Reschedule</a></section><div class="notice info"><svg class="icon " aria-hidden="true"><use href="#i-info"></use></svg><span>Biaya administrasi reschedule mungkin berlaku sesuai jadwal pengganti. Tiket lama tidak akan langsung dibatalkan.</span></div>
@endsection
