@extends('layouts.placeholder')
@section('page-title', 'Kelola Testimoni')
@section('user-role', 'seller')
@section('active-nav', 'ulasan')
@section('content')
<div class="section-heading "><h1>Review Management</h1><p>Kelola masukan dari penumpang.</p></div><section class="card "><div class="rating-head"><strong>4.8</strong><span><b class="stars">★★★★★</b><small>Rating rata-rata</small></span></div></section><a class="list-item " href="{{ url('/preview/seller/reviews/detail') }}"><span class="item-icon"><svg class="icon " aria-hidden="true"><use href="#i-star"></use></svg></span><span class="item-main"><b>Zayn Malik · 5 ★</b><small>Perjalanan nyaman dan driver ramah.</small></span><span class="item-right"><span class="pill blue">Baru</span></span></a><a class="list-item " href="{{ url('/preview/seller/reviews/detail') }}"><span class="item-icon"><svg class="icon " aria-hidden="true"><use href="#i-star"></use></svg></span><span class="item-main"><b>Nadia Putri · 4 ★</b><small>Jadwal tepat waktu dan pelayanan baik.</small></span><svg class="icon " aria-hidden="true"><use href="#i-chevron-right"></use></svg></a>
@endsection
