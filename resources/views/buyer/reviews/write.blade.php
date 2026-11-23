@extends('layouts.placeholder')
@section('page-title', 'Tulis Testimoni')
@section('user-role', 'buyer')
@section('active-nav', 'profil')
@section('content')
<div class="section-heading "><h1>Berikan Testimoni</h1><p>Bagikan pengalaman perjalanan Anda.</p></div><section class="card "><div class="flex-between"><b>TRV-88291</b><span class="pill success">Selesai</span></div><p class="muted">Perjalanan Surabaya → Malang</p></section><section class="card "><h3>Bagaimana pengalaman Anda?</h3><div class="star-input" data-star-rating><button type="button" data-rate="1">★</button><button type="button" data-rate="2">★</button><button type="button" data-rate="3">★</button><button type="button" data-rate="4">★</button><button type="button" data-rate="5">★</button></div><small class="muted">Pilih 1–5 bintang.</small><label class="field"><span>Tulis Ulasan</span><textarea name="notes" rows="4" placeholder="Ceritakan pengalamanmu..."></textarea></label><label class="field"><span>Foto Perjalanan (opsional)</span><input type="file" accept="image/*"></label><button class="btn primary block" data-toast="Testimoni belum tersimpan; ini hanya pratinjau UI.">Kirim Testimoni</button></section>
@endsection
