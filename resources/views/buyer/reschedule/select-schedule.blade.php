@extends('layouts.placeholder')
@section('page-title', 'Pilih Jadwal Baru')
@section('user-role', 'buyer')
@section('active-nav', 'pesanan')
@section('content')
<div class="section-heading "><h1>Reschedule Trip</h1><p>Pilih perjalanan yang masih tersedia.</p></div><section class="section"><div class="section-label"><h2>Ketersediaan</h2></div><section class="card "><div class="flex-between"><b>14:00 — 16:30</b><span class="pill success">6 Seats left</span></div><p class="muted">Surabaya → Malang · Langsung</p><div class="bill"><span>Additional Cost</span><b>Rp 50.000</b></div><a class="btn outline small" href="{{ url('/preview/buyer/reschedule/price-detail') }}" >Pilih Jadwal</a></section><section class="card "><div class="flex-between"><b>12:00 — 14:30</b><span class="pill danger">2 Seats left</span></div><p class="muted">Surabaya → Malang · Langsung</p><div class="bill"><span>Additional Cost</span><b>Rp 50.000</b></div><a class="btn outline small" href="{{ url('/preview/buyer/reschedule/price-detail') }}" >Pilih Jadwal</a></section></section><div class="notice info"><svg class="icon " aria-hidden="true"><use href="#i-info"></use></svg><span>Ketersediaan kursi dalam UI ini hanya data contoh.</span></div>
@endsection
