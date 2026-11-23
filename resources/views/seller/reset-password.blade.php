@extends('layouts.placeholder')
@section('page-title', 'Reset Password')
@section('user-role', 'seller')
@section('active-nav', 'home')
@section('hide-top', '1')
@section('hide-bottom', '1')
@section('main-class', 'full-main')
@section('content')
<div class="auth-wrap"><div class="auth-card"><div class="auth-intro"><div class="brand-mark"><svg class="icon " aria-hidden="true"><use href="#i-lock"></use></svg></div><h1>Reset Password</h1><p>Masukkan email yang terdaftar untuk menerima instruksi pemulihan akses.</p></div><form data-demo-navigate="{{ url('/preview/seller/reset-link-sent') }}" method="post" class="stack form-demo"><label class="field"><span>Email Seller</span><div class="field-control"><svg class="icon " aria-hidden="true"><use href="#i-mail"></use></svg><input type="email" name="email" placeholder="seller@email.com" required></div></label><button type="submit" class="btn primary block">Kirim Link Reset <svg class="icon " aria-hidden="true"><use href="#i-arrow-right"></use></svg></button></form><p class="auth-footer"><a class="text-link" href="{{ url('/preview/seller/login') }}" >Kembali ke Login</a></p></div></div>
@endsection
