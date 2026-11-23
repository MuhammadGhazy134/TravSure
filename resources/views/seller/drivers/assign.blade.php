@extends('layouts.placeholder')
@section('page-title', 'Penugasan Driver')
@section('user-role', 'seller')
@section('active-nav', 'driver')
@section('content')
<div class="section-heading "><h1>Penugasan Driver</h1><p>Pilih jadwal dan driver yang sesuai.</p></div><section class="card "><form class="stack" data-demo-save><label class="field"><span>Jadwal Perjalanan</span><select required><option value="">Pilih jadwal</option><option>Surabaya → Malang · 14:00</option><option>Jakarta → Yogyakarta · 09:00</option></select></label><label class="field"><span>Driver</span><select required><option value="">Pilih driver</option><option>Andi Budi · DRV-001</option><option>Dimas Pratama · DRV-002</option></select></label><label class="field"><span>Armada</span><select required><option value="">Pilih armada</option><option>Toyota Hiace · L 1234 AB</option><option>Elf Long · B 5678 CD</option></select></label><label class="field"><span>Catatan Penugasan</span><textarea name="notes" rows="4" placeholder="Catatan tambahan untuk driver"></textarea></label><button type="submit" class="btn primary block">Konfirmasi Penugasan</button></form></section><div class="notice info"><svg class="icon " aria-hidden="true"><use href="#i-info"></use></svg><span>Penugasan driver belum tersimpan pada server; ini hanya demo antarmuka.</span></div>
@endsection
