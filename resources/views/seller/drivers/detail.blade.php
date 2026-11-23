@extends('layouts.placeholder')
@section('page-title', 'Detail Driver')
@section('user-role', 'seller')
@section('active-nav', 'driver')
@section('content')
<div class="section-heading "><h1>Detail Driver</h1><p>Informasi dan status driver.</p></div><section class="card "><div class="driver-profile"><div class="avatar xl">AB</div><h2>Andi Budi</h2><p>DRV-001</p><span class="pill success">Tersedia</span></div><hr><div class="bill"><span>Nomor Telepon</span><b>Belum dikonfigurasi</b></div><div class="bill"><span>Rating</span><b>4.9 ★</b></div><div class="bill"><span>Masa Kerja</span><b>3 Tahun</b></div><div class="bill"><span>Lokasi Terkini</span><b>Surabaya</b></div></section><a class="btn primary block" href="{{ url('/preview/seller/drivers/assign') }}" >Tugaskan ke Perjalanan</a><a class="btn outline block" href="{{ url('/preview/seller/drivers/index') }}" >Kembali</a>
@endsection
