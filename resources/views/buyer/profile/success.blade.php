@extends('layouts.placeholder')
@section('page-title', 'Profil Berhasil Diperbarui')
@section('user-role', 'buyer')
@section('active-nav', 'profil')
@section('content')
<div class="status-view"><div class="status-icon success"><svg class="icon " aria-hidden="true"><use href="#i-check-circle"></use></svg></div><h1>Pembaruan Berhasil!</h1><p>Perubahan informasi profil berhasil disimulasikan pada tampilan.</p><a class="btn primary block" href="{{ url('/preview/buyer/profile/index') }}" >Kembali ke Profil</a></div>
@endsection
