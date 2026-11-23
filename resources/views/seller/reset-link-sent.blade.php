@extends('layouts.placeholder')
@section('page-title', 'Link Reset Terkirim')
@section('user-role', 'seller')
@section('active-nav', 'home')
@section('hide-top', '1')
@section('hide-bottom', '1')
@section('main-class', 'full-main')
@section('content')
<div class="status-view"><div class="status-icon success"><svg class="icon " aria-hidden="true"><use href="#i-mail"></use></svg></div><h1>Instruksi Reset Disiapkan</h1><p>Pada aplikasi final, instruksi reset akan dikirim melalui email yang terdaftar.</p><div class="notice info"><svg class="icon " aria-hidden="true"><use href="#i-info"></use></svg><span>Ini masih tampilan demo; email belum benar-benar dikirim.</span></div><a class="btn primary block" href="{{ url('/preview/seller/login') }}" >Kembali ke Login</a></div>
@endsection
