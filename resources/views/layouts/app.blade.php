<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Puskesmas Sehat Utama') - Antrean Online</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('styles')
</head>
<body>
    <nav class="navbar">
        <div class="container nav-container">
            <a href="{{ url('/') }}" class="logo">
                <i data-lucide="activity" style="color: var(--primary);"></i>
                Puskesmas<span>SehatUtama</span>
            </a>
            
            <div class="nav-links">
                <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
                <a href="{{ url('/services') }}" class="nav-link {{ Request::is('services') ? 'active' : '' }}">Layanan</a>
                <a href="{{ url('/staff') }}" class="nav-link {{ Request::is('staff') ? 'active' : '' }}">Tentang Staf</a>
                <a href="{{ url('/contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Kontak</a>
                <a href="{{ url('/display') }}" class="nav-link {{ Request::is('display') ? 'active' : '' }}">Layar Monitor</a>
                <a href="{{ url('/checkin') }}" class="nav-link {{ Request::is('checkin') ? 'active' : '' }}">Mesin Check-in</a>
                
                @auth
                    @if(Auth::user()->role === 'admin')
                        <a href="{{ url('/admin') }}" class="nav-link">Dashboard Admin</a>
                    @elseif(Auth::user()->role === 'doctor')
                        <a href="{{ url('/admin') }}" class="nav-link">Dashboard Dokter</a>
                    @else
                        <a href="{{ url('/#booking-section') }}" class="nav-link">Antrean Saya</a>
                    @endif
                    
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-sm" style="display: inline-flex; align-items: center; gap: 6px;">
                            <i data-lucide="log-out" style="width: 14px; height: 14px;"></i> Keluar
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline btn-sm" style="display: inline-flex; align-items: center; gap: 6px;">
                        <i data-lucide="log-in" style="width: 14px; height: 14px;"></i> Masuk
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm" style="display: inline-flex; align-items: center; gap: 6px;">
                        <i data-lucide="user-plus" style="width: 14px; height: 14px;"></i> Daftar
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
    @yield('scripts')
</body>
</html>
