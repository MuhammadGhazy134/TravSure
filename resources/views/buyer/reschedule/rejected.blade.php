@extends('layouts.placeholder')
@section('page-title', 'Reschedule Ditolak')
@section('user-role', 'buyer')
@section('active-nav', 'pesanan')
@section('content')
<div class="status-view"><div class="status-icon error"><svg class="icon " aria-hidden="true"><use href="#i-alert-circle"></use></svg></div><h1>Reschedule Ditolak</h1><p>Maaf, permintaan pengaturan ulang jadwal perjalanan Anda saat ini tidak dapat kami proses.</p><section class="card "><h3>Alasan Penolakan</h3><p>Pengajuan melewati batas waktu pembatalan. Hubungi customer service untuk mendapat bantuan terkait perjalanan.</p><div class="bill"><span>ID Pesanan</span><b>TRV-882910-XN</b></div></section><a class="btn primary block" href="{{ url('/preview/buyer/help/index') }}" >Hubungi Customer Service</a><a class="btn outline block" href="{{ url('/preview/buyer/booking/my-bookings') }}" >Kembali ke Pesanan</a></div>
@endsection
