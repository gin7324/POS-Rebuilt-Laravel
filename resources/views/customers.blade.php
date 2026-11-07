@extends('layouts.app')

@section('title', 'Customer accounts')

@section('content')
    <header class="page-heading">
        <div>
            <p class="eyebrow">Accounts directory</p>
            <h1>Customer accounts</h1>
            <p class="lead">A quick look at the people who make your business possible.</p>
        </div>
        <span class="count-chip">{{ count($customers) }} customers</span>
    </header>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th scope="col">Customer</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Account status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                        <td><span class="status {{ strtolower($customer['status']) }}">{{ $customer['status'] }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
