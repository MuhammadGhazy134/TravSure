@extends('layouts.placeholder')
@section('page-title', 'Kelola Driver')
@section('user-role', 'seller')
@section('active-nav', 'driver')
@section('content')
<div class="section-heading "><h1>Driver Management</h1><p>Kelola driver yang tersedia untuk perjalanan.</p></div><a class="btn primary block" href="{{ url('/preview/seller/drivers/assign') }}" >Tugaskan Driver</a><a class="list-item " href="{{ url('/preview/seller/drivers/detail') }}"><span class="item-icon"><svg class="icon " aria-hidden="true"><use href="#i-truck"></use></svg></span><span class="item-main"><b>Andi Budi</b><small>DRV-001 · Toyota Hiace</small></span><span class="item-right"><span class="pill success">Tersedia</span></span></a><a class="list-item " href="{{ url('/preview/seller/drivers/detail') }}"><span class="item-icon"><svg class="icon " aria-hidden="true"><use href="#i-truck"></use></svg></span><span class="item-main"><b>Dimas Pratama</b><small>DRV-002 · Elf Long</small></span><span class="item-right"><span class="pill warning">Bertugas</span></span></a><a class="list-item " href="{{ url('/preview/seller/drivers/detail') }}"><span class="item-icon"><svg class="icon " aria-hidden="true"><use href="#i-truck"></use></svg></span><span class="item-main"><b>Rizal Maulana</b><small>DRV-003 · Toyota Hiace</small></span><span class="item-right"><span class="pill success">Tersedia</span></span></a>
@endsection
