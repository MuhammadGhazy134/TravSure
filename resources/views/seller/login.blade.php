@extends('layouts.placeholder')
@section('page-title', 'Login Seller')
@section('user-role', 'seller')
@section('active-nav', 'home')
@section('hide-top', '1')
@section('hide-bottom', '1')
@section('main-class', 'full-main')
@section('content')
<div class="auth-wrap"><div class="seller-brand"><div class="brand-mark"><svg class="icon " aria-hidden="true"><use href="#i-briefcase"></use></svg></div><h1>Travsure</h1><p>Seller Portal</p></div><div class="auth-card"><div class="auth-intro"><h1>Selamat Datang Kembali</h1><p>Masuk ke akun Seller untuk mengelola layanan travel Anda.</p></div><form data-demo-navigate="{{ url('/preview/seller/dashboard/index') }}" method="post" class="stack form-demo"><label class="field"><span>Email Seller</span><div class="field-control"><svg class="icon " aria-hidden="true"><use href="#i-mail"></use></svg><input type="email" name="email" placeholder="seller@email.com" required></div></label><label class="field"><span>Kata Sandi</span><div class="field-control"><svg class="icon " aria-hidden="true"><use href="#i-lock"></use></svg><input id="seller-password" type="password" name="password" required placeholder="Masukkan kata sandi"><button type="button" class="icon-button" data-toggle-password="#seller-password"><svg class="icon " aria-hidden="true"><use href="#i-eye"></use></svg></button></div></label><button type="submit" class="btn primary block">Masuk Sebagai Seller <svg class="icon " aria-hidden="true"><use href="#i-arrow-right"></use></svg></button></form><p class="auth-footer"><a class="text-link" href="{{ url('/preview/seller/reset-password') }}" >Lupa Password?</a></p></div></div>
@endsection
