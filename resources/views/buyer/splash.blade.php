@extends('layouts.placeholder')
@section('page-title', 'Splash Screen')
@section('user-role', 'buyer')
@section('active-nav', 'home')
@section('hide-top', '1')
@section('hide-bottom', '1')
@section('main-class', 'full-main')
@section('content')
<div class="splash-view"><div class="splash-center"><div class="brand-mark large"><svg viewBox="0 0 48 48" fill="none"><path d="M30 8a17 17 0 1 0 0 32M9 23h12m-6-6 6 6-6 6" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><circle cx="30" cy="29" r="8" stroke="white" stroke-width="4"/><path d="m36 35 7 7" stroke="white" stroke-width="4" stroke-linecap="round"/></svg></div><h1>Travsure</h1><p>Perjalanan Jadi Mudah</p></div><div class="splash-bottom"><div class="loading-dots"><i></i><i></i><i></i></div><a class="btn white block" href="{{ url('/buyer/login') }}" >Mulai Perjalanan</a></div></div>
@endsection
