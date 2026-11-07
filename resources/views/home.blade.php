@extends('layouts.app')

@section('title', 'Point of sale')

@section('content')
    <section class="hero">
        <div>
            <p class="eyebrow">Point of sale, made simple</p>
            <h1>Good business<br>starts at the <span>counter.</span></h1>
            <p class="lead">A clear, friendly place to keep your store moving. Explore the people and tools behind your day-to-day service.</p>
        </div>
        <div class="hero-art" aria-hidden="true">
            <div class="receipt">
                <div class="receipt-top"><span>AETHERWORKZ</span><span>✦</span></div>
                <div class="receipt-line"><span>Fresh coffee</span><span>$4.50</span></div>
                <div class="receipt-line"><span>Bakery special</span><span>$6.25</span></div>
                <div class="receipt-line total"><span>Total</span><span>$10.75</span></div>
            </div>
        </div>
    </section>

    <section aria-labelledby="explore-heading">
        <div class="section-heading">
            <h2 id="explore-heading">Explore your workspace</h2>
            <p>Jump into an account directory or learn more about Aetherworkz.</p>
        </div>
        <div class="card-grid">
            <a class="feature-card" href="{{ route('customers.index') }}">
                <span class="feature-icon" aria-hidden="true">♧</span>
                <h2>Customer accounts</h2>
                <p>Find customer contact details and account status.</p>
                <span class="card-link">View customers →</span>
            </a>
            <a class="feature-card" href="{{ route('users.index') }}">
                <span class="feature-icon" aria-hidden="true">◎</span>
                <h2>User accounts</h2>
                <p>See the team members and roles that keep things running.</p>
                <span class="card-link">View users →</span>
            </a>
            <a class="feature-card" href="{{ route('about') }}">
                <span class="feature-icon" aria-hidden="true">✳</span>
                <h2>About Aetherworkz</h2>
                <p>Learn about this straightforward point-of-sale experience.</p>
                <span class="card-link">Learn more →</span>
            </a>
        </div>
    </section>
@endsection
