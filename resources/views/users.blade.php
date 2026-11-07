@extends('layouts.app')

@section('title', 'User accounts')

@section('content')
    <header class="page-heading">
        <div>
            <p class="eyebrow">Team directory</p>
            <h1>User accounts</h1>
            <p class="lead">Meet the team and see the roles that help your store run smoothly.</p>
        </div>
        <span class="count-chip">{{ count($users) }} team members</span>
    </header>

    <div class="table-card">
        <table>
            <thead>
                <tr>
                    <th scope="col">Team member</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Account status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['role'] }}</td>
                        <td><span class="status {{ strtolower($user['status']) }}">{{ $user['status'] }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
