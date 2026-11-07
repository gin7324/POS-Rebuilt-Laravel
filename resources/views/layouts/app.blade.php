<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f7f5">
    <title>@yield('title', 'Aetherworkz POS') | Aetherworkz</title>
    <style>
        :root {
            color-scheme: light;
            --ink: #1d2924;
            --muted: #748078;
            --line: #e7ebe7;
            --paper: #fff;
            --canvas: #f6f7f5;
            --green: #26664b;
            --green-dark: #1e503b;
            --soft-green: #e8f2ec;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: var(--canvas);
            color: var(--ink);
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            font-size: 15px;
            line-height: 1.6;
        }
        a { color: inherit; text-decoration: none; }
        .site-header { background: var(--paper); border-bottom: 1px solid var(--line); }
        .nav-wrap, .main-wrap, .footer-wrap { width: min(1120px, calc(100% - 48px)); margin: 0 auto; }
        .nav-wrap { min-height: 76px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { display: inline-flex; align-items: center; gap: 11px; font-size: 17px; font-weight: 750; letter-spacing: -.03em; }
        .brand-mark { width: 34px; height: 34px; display: grid; place-items: center; border-radius: 11px; color: white; background: var(--green); font-size: 17px; }
        .nav-links { display: flex; align-items: center; gap: 7px; }
        .nav-link { padding: 9px 13px; border-radius: 8px; color: #647068; font-size: 14px; font-weight: 550; }
        .nav-link:hover, .nav-link.active { background: var(--soft-green); color: var(--green-dark); }
        .main-wrap { min-height: calc(100vh - 144px); padding-top: 58px; padding-bottom: 76px; }
        .eyebrow { margin: 0 0 12px; color: var(--green); font-size: 12px; font-weight: 750; letter-spacing: .12em; text-transform: uppercase; }
        h1, h2, p { margin-top: 0; }
        h1 { margin-bottom: 14px; font-size: clamp(36px, 5vw, 56px); letter-spacing: -.055em; line-height: 1.08; }
        h2 { margin-bottom: 8px; font-size: 20px; letter-spacing: -.025em; }
        .lead { max-width: 650px; margin-bottom: 0; color: var(--muted); font-size: 18px; line-height: 1.7; }
        .hero { display: grid; grid-template-columns: minmax(0, 1.3fr) minmax(250px, .7fr); align-items: center; gap: 48px; padding: 40px 0 60px; }
        .hero h1 span { color: var(--green); }
        .hero-art { min-height: 270px; display: grid; place-items: center; border: 1px solid #e0e9e2; border-radius: 22px; background: linear-gradient(145deg, #edf5ef, #e1eee4); }
        .receipt { width: min(230px, 80%); padding: 25px; border-radius: 13px; background: white; box-shadow: 0 18px 50px #234d3818; transform: rotate(3deg); }
        .receipt-top { display: flex; justify-content: space-between; margin-bottom: 23px; color: var(--green); font-size: 12px; font-weight: 750; }
        .receipt-line { display: flex; justify-content: space-between; padding: 9px 0; border-top: 1px solid var(--line); color: #66716a; font-size: 12px; }
        .receipt-line.total { color: var(--ink); font-weight: 750; }
        .section-heading { margin: 28px 0 20px; }
        .section-heading h2 { margin-bottom: 5px; font-size: 25px; }
        .section-heading p { margin-bottom: 0; color: var(--muted); }
        .card-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 17px; }
        .feature-card, .content-card, .table-card { border: 1px solid var(--line); border-radius: 14px; background: var(--paper); }
        .feature-card { min-height: 190px; padding: 24px; transition: transform .18s ease, box-shadow .18s ease; }
        .feature-card:hover { transform: translateY(-3px); box-shadow: 0 12px 30px #152b1d0a; }
        .feature-icon { width: 40px; height: 40px; display: grid; place-items: center; margin-bottom: 17px; border-radius: 11px; background: var(--soft-green); color: var(--green); font-size: 18px; font-weight: 700; }
        .feature-card p { margin-bottom: 15px; color: var(--muted); font-size: 14px; }
        .card-link { color: var(--green); font-size: 14px; font-weight: 700; }
        .page-heading { display: flex; align-items: flex-end; justify-content: space-between; gap: 20px; margin-bottom: 30px; }
        .page-heading h1 { margin-bottom: 10px; font-size: clamp(34px, 4vw, 44px); }
        .page-heading .lead { font-size: 16px; }
        .count-chip { flex: 0 0 auto; padding: 8px 13px; border: 1px solid var(--line); border-radius: 999px; background: white; color: #59665e; font-size: 13px; font-weight: 650; }
        .table-card { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th, td { padding: 16px 21px; border-bottom: 1px solid var(--line); white-space: nowrap; }
        th { background: #fafbfa; color: #7a857e; font-size: 11px; font-weight: 750; letter-spacing: .08em; text-transform: uppercase; }
        td { color: #4a574f; font-size: 14px; }
        td:first-child { color: var(--ink); font-weight: 650; }
        tr:last-child td { border-bottom: 0; }
        .status { display: inline-flex; align-items: center; gap: 7px; }
        .status::before { width: 7px; height: 7px; border-radius: 50%; background: #4a9b69; content: ""; }
        .status.pending::before { background: #d59a3a; }
        .status.inactive::before { background: #a4aca7; }
        .content-grid { display: grid; grid-template-columns: 1.2fr .8fr; gap: 18px; margin-top: 34px; }
        .content-card { padding: 27px; }
        .content-card p { margin-bottom: 0; color: var(--muted); }
        .stat-list { display: grid; gap: 17px; margin-top: 22px; }
        .stat { display: flex; justify-content: space-between; gap: 16px; padding-bottom: 13px; border-bottom: 1px solid var(--line); color: var(--muted); font-size: 14px; }
        .stat:last-child { padding-bottom: 0; border-bottom: 0; }
        .stat strong { color: var(--ink); }
        .site-footer { border-top: 1px solid var(--line); background: white; color: var(--muted); font-size: 13px; }
        .footer-wrap { min-height: 68px; display: flex; align-items: center; justify-content: space-between; gap: 16px; }
        .footer-nav { display: flex; gap: 18px; }
        .footer-nav a:hover { color: var(--green); }
        @media (max-width: 720px) {
            .nav-wrap, .main-wrap, .footer-wrap { width: min(100% - 32px, 560px); }
            .nav-wrap { min-height: auto; align-items: flex-start; flex-direction: column; padding: 17px 0 13px; gap: 9px; }
            .nav-links { width: 100%; flex-wrap: wrap; gap: 3px; }
            .nav-link { padding: 7px 10px; font-size: 13px; }
            .main-wrap { min-height: calc(100vh - 170px); padding-top: 35px; }
            .hero { grid-template-columns: 1fr; gap: 30px; padding: 15px 0 40px; }
            .hero-art { min-height: 220px; }
            .card-grid { grid-template-columns: 1fr; }
            .feature-card { min-height: auto; }
            .page-heading { align-items: flex-start; flex-direction: column; }
            .content-grid { grid-template-columns: 1fr; }
            .footer-wrap { align-items: flex-start; flex-direction: column; justify-content: center; padding: 16px 0; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">C</span>
                <span>Aetherworkz <span style="color: var(--muted); font-weight: 500;">POS</span></span>
            </a>
            <nav class="nav-links" aria-label="Main navigation">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="nav-link {{ request()->routeIs('customers.*') ? 'active' : '' }}" href="{{ route('customers.index') }}">Customers</a>
                <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{ route('users.index') }}">Users</a>
            </nav>
        </div>
    </header>
    <main class="main-wrap">
        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="footer-wrap">
            <span>© {{ date('Y') }} Aetherworkz POS · Simple tools for better service.</span>
            <nav class="footer-nav" aria-label="Footer navigation">
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('customers.index') }}">Customers</a>
                <a href="{{ route('users.index') }}">Users</a>
            </nav>
        </div>
    </footer>
</body>
</html>
