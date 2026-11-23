<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#002065">
    <title>@yield('page-title', 'TravSure') - TravSure</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('travsure/ui.css') }}">
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;width:0;height:0;overflow:hidden" aria-hidden="true">
  <symbol id="i-home" viewBox="0 0 24 24"><path d="m3 10 9-7 9 7v10H3z"/><path d="M9 20v-7h6v7"/></symbol>
  <symbol id="i-ticket" viewBox="0 0 24 24"><path d="M4 6h16v4a2 2 0 0 0 0 4v4H4v-4a2 2 0 0 0 0-4z"/><path d="M12 6v12" stroke-dasharray="2 2"/></symbol>
  <symbol id="i-bell" viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 8-3 8-3 10h18c0-2-3-2-3-10"/><path d="M10 21h4"/></symbol>
  <symbol id="i-user" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 21c1-8 15-8 16 0"/></symbol>
  <symbol id="i-user-plus" viewBox="0 0 24 24"><circle cx="10" cy="7" r="4"/><path d="M2 21c0-7 14-7 14 0M18 9h5m-2.5-2.5v5"/></symbol>
  <symbol id="i-calendar" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M7 3v4m10-4v4M3 10h18"/></symbol>
  <symbol id="i-clock" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></symbol>
  <symbol id="i-mail" viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="15" rx="2"/><path d="m3 7 9 7 9-7"/></symbol>
  <symbol id="i-lock" viewBox="0 0 24 24"><rect x="5" y="10" width="14" height="12" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/></symbol>
  <symbol id="i-eye" viewBox="0 0 24 24"><path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z"/><circle cx="12" cy="12" r="3"/></symbol>
  <symbol id="i-map-pin" viewBox="0 0 24 24"><path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0z"/><circle cx="12" cy="10" r="2.5"/></symbol>
  <symbol id="i-flag" viewBox="0 0 24 24"><path d="M5 22V3m0 1c6-3 8 3 15 0v11c-7 3-9-3-15 0"/></symbol>
  <symbol id="i-bus" viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="16" rx="3"/><path d="M4 11h16M8 19v3m8-3v3"/><circle cx="8" cy="15" r="1"/><circle cx="16" cy="15" r="1"/></symbol>
  <symbol id="i-truck" viewBox="0 0 24 24"><path d="M2 6h13v12H2zM15 10h4l3 4v4h-7"/><circle cx="7" cy="19" r="2"/><circle cx="19" cy="19" r="2"/></symbol>
  <symbol id="i-wallet" viewBox="0 0 24 24"><rect x="3" y="6" width="18" height="14" rx="2"/><path d="M3 9h18M15 13h4"/></symbol>
  <symbol id="i-landmark" viewBox="0 0 24 24"><path d="m2 9 10-6 10 6M3 21h18M5 10v9m5-9v9m4-9v9m5-9v9"/></symbol>
  <symbol id="i-check-circle" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="m8 12 3 3 5-6"/></symbol>
  <symbol id="i-alert-circle" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 6v7M12 17h.01"/></symbol>
  <symbol id="i-info" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M12 11v6M12 7h.01"/></symbol>
  <symbol id="i-search" viewBox="0 0 24 24"><circle cx="11" cy="11" r="7"/><path d="m16 16 5 5"/></symbol>
  <symbol id="i-star" viewBox="0 0 24 24"><path d="m12 2 3 7h7l-5.5 5 2 8L12 18l-6.5 4 2-8L2 9h7z"/></symbol>
  <symbol id="i-chevron-right" viewBox="0 0 24 24"><path d="m9 5 7 7-7 7"/></symbol>
  <symbol id="i-arrow-right" viewBox="0 0 24 24"><path d="M3 12h18m-8-7 8 7-8 7"/></symbol>
  <symbol id="i-arrow-left" viewBox="0 0 24 24"><path d="M21 12H3m8-7-8 7 8 7"/></symbol>
  <symbol id="i-phone" viewBox="0 0 24 24"><path d="M4 3h5l2 5-3 2c2 4 4 6 8 8l2-3 5 2v4c-10 4-23-9-19-18"/></symbol>
  <symbol id="i-headphones" viewBox="0 0 24 24"><path d="M3 14v-3a9 9 0 0 1 18 0v3M3 13h4v8H3zM17 13h4v8h-4z"/></symbol>
  <symbol id="i-shield" viewBox="0 0 24 24"><path d="M12 2 20 5v6c0 6-4 9-8 11-4-2-8-5-8-11V5z"/><path d="m9 12 2 2 4-5"/></symbol>
  <symbol id="i-file-text" viewBox="0 0 24 24"><path d="M5 2h10l4 4v16H5zM15 2v5h4M8 12h8M8 16h8"/></symbol>
  <symbol id="i-message-circle" viewBox="0 0 24 24"><path d="M21 11a9 9 0 0 1-9 9c-2 0-4 0-5-1l-4 2 1-5a9 9 0 1 1 17-5z"/></symbol>
  <symbol id="i-sun" viewBox="0 0 24 24"><circle cx="12" cy="12" r="4"/><path d="M12 2v3m0 14v3M2 12h3m14 0h3M5 5l2 2m10 10 2 2M19 5l-2 2M7 17l-2 2"/></symbol>
  <symbol id="i-moon" viewBox="0 0 24 24"><path d="M20 15A9 9 0 0 1 9 4 9 9 0 1 0 20 15"/></symbol>
  <symbol id="i-briefcase" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="14" rx="2"/><path d="M9 7V4h6v3M3 13h18"/></symbol>
</svg>
@php
  $isSeller = trim($__env->yieldContent('user-role', 'buyer')) === 'seller';
  $nav = trim($__env->yieldContent('active-nav', 'home'));
@endphp
<div class="phone {{ $isSeller ? 'seller-app' : 'buyer-app' }}">
    @unless($__env->hasSection('hide-top'))
      <header class="topbar">
        <a class="brand" href="{{ url($isSeller ? '/preview/seller/dashboard/index' : '/') }}">
          <svg class="icon"><use href="#i-map-pin"></use></svg><b>Travsure</b>
        </a>
        <a class="avatar-link" href="{{ url($isSeller ? '/preview/seller/notifications/index' : '/preview/buyer/profile/index') }}" aria-label="Profil atau notifikasi">
          <span>{{ $isSeller ? 'S' : 'ZM' }}</span>
        </a>
      </header>
    @endunless
    <main class="main @yield('main-class')">@yield('content')</main>
    @unless($__env->hasSection('hide-bottom'))
      <nav class="bottom-nav" aria-label="Navigasi utama">
        @if($isSeller)
          <a class="{{ $nav === 'dashboard' ? 'active' : '' }}" href="{{ url('/preview/seller/dashboard/index') }}"><svg class="icon"><use href="#i-home"></use></svg><small>Dashboard</small></a>
          <a class="{{ $nav === 'pesanan' ? 'active' : '' }}" href="{{ url('/preview/seller/orders/index') }}"><svg class="icon"><use href="#i-ticket"></use></svg><small>Pesanan</small></a>
          <a class="{{ $nav === 'jadwal' ? 'active' : '' }}" href="{{ url('/preview/seller/schedules/index') }}"><svg class="icon"><use href="#i-calendar"></use></svg><small>Jadwal</small></a>
          <a class="{{ $nav === 'driver' ? 'active' : '' }}" href="{{ url('/preview/seller/drivers/index') }}"><svg class="icon"><use href="#i-truck"></use></svg><small>Driver</small></a>
          <a class="{{ $nav === 'notifikasi' ? 'active' : '' }}" href="{{ url('/preview/seller/notifications/index') }}"><svg class="icon"><use href="#i-bell"></use></svg><small>Notif</small></a>
        @else
          <a class="{{ $nav === 'home' ? 'active' : '' }}" href="{{ url('/') }}"><svg class="icon"><use href="#i-home"></use></svg><small>Beranda</small></a>
          <a class="{{ $nav === 'pesanan' ? 'active' : '' }}" href="{{ url('/preview/buyer/booking/my-bookings') }}"><svg class="icon"><use href="#i-ticket"></use></svg><small>Pesanan</small></a>
          <a href="{{ url('/preview/buyer/booking/search') }}"><svg class="icon"><use href="#i-bus"></use></svg><small>Travel</small></a>
          <a class="{{ $nav === 'notifikasi' ? 'active' : '' }}" href="{{ url('/preview/buyer/notifications/index') }}"><svg class="icon"><use href="#i-bell"></use></svg><small>Notif</small></a>
          <a class="{{ $nav === 'profil' ? 'active' : '' }}" href="{{ url('/preview/buyer/profile/index') }}"><svg class="icon"><use href="#i-user"></use></svg><small>Profil</small></a>
        @endif
      </nav>
    @endunless
</div>
<div id="toast" role="status" aria-live="polite"></div>
<script src="{{ asset('travsure/ui.js') }}" defer></script>
@stack('page-scripts')
</body>
</html>