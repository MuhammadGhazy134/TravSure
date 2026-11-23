@extends('layouts.placeholder')
@section('page-title', 'Detail Testimoni')
@section('user-role', 'seller')
@section('active-nav', 'ulasan')
@section('content')
<div class="section-heading "><h1>Detail Testimoni</h1><p>Baca dan tanggapi ulasan pelanggan.</p></div><section class="card review-card"><div class="flex-between"><div class="driver-card"><div class="avatar small">ZA</div><div><b>Zayn Malik</b><small>Surabaya → Malang</small></div></div><b class="stars">★★★★★</b></div><p>Perjalanan nyaman, driver ramah dan tiba tepat waktu.</p><small class="muted">Penumpang terverifikasi · Oktober 2026</small></section><section class="card "><h3>Tanggapan Seller</h3><label class="field"><span>Tulis Tanggapan</span><textarea name="feedback" rows="4" placeholder="Terima kasih telah menggunakan layanan kami."></textarea></label><button type="button" class="btn primary block" data-toast="Tanggapan belum disimpan; integrasi backend belum tersedia.">Kirim Tanggapan</button></section><a class="btn outline block" href="{{ url('/preview/seller/reviews/index') }}" >Kembali ke Testimoni</a>
@endsection
