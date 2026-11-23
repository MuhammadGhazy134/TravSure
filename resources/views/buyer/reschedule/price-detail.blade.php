@extends('layouts.placeholder')
@section('page-title', 'Detail Biaya Reschedule')
@section('user-role', 'buyer')
@section('active-nav', 'pesanan')
@section('content')
<div class="section-heading "><h1>Reschedule Trip</h1><p>Tinjau biaya tambahan untuk jadwal baru.</p></div><section class="card "><div class="flex-between"><span class="pill blue">SELECTED</span><strong>14:00 → 16:30</strong></div><p class="muted">Surabaya → Malang · Rabu, 26 Okt</p></section><section class="card "><h3>Detail Harga</h3><div class="bill"><span>Reschedule Fee</span><b>Rp 50.000</b></div><div class="bill"><span>Pajak</span><b>Rp 0</b></div><hr><div class="bill total"><span>Total</span><b>Rp 50.000</b></div></section><a class="btn primary block" href="{{ url('/preview/buyer/reschedule/confirmation') }}" >Konfirmasi →</a><div class="notice info"><svg class="icon " aria-hidden="true"><use href="#i-info"></use></svg><span>Dengan mengonfirmasi, Anda menyetujui syarat dan ketentuan reschedule.</span></div>
@endsection
