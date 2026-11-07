@extends('layouts.app')

@section('title', 'About')

@section('content')
    <header class="page-heading">
        <div>
            <p class="eyebrow">About Aetherworkz</p>
            <h1>More time for the people you serve.</h1>
            <p class="lead">Aetherworkz is a simple POS workspace concept for keeping everyday store information easy to find.</p>
        </div>
    </header>

    <div class="content-grid">
        <section class="content-card">
            <h2>A focused starting point</h2>
            <p>This application brings together a welcoming home page, a customer directory, and a user directory. The account pages currently use sample records stored in PHP arrays so you can explore the experience without a database.</p>
        </section>
        <aside class="content-card">
            <h2>What's inside</h2>
            <div class="stat-list">
                <div class="stat"><span>Customer accounts</span><strong>5 sample records</strong></div>
                <div class="stat"><span>User accounts</span><strong>5 sample records</strong></div>
                <div class="stat"><span>Pages</span><strong>4 connected routes</strong></div>
            </div>
        </aside>
    </div>
@endsection
