<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'Jordan Lee', 'email' => 'jordan.lee@example.com', 'role' => 'Administrator', 'status' => 'Active'],
            ['name' => 'Taylor Morgan', 'email' => 'taylor.morgan@example.com', 'role' => 'Manager', 'status' => 'Active'],
            ['name' => 'Casey Rivera', 'email' => 'casey.rivera@example.com', 'role' => 'Cashier', 'status' => 'Active'],
            ['name' => 'Riley Brooks', 'email' => 'riley.brooks@example.com', 'role' => 'Cashier', 'status' => 'Pending'],
            ['name' => 'Alex Kim', 'email' => 'alex.kim@example.com', 'role' => 'Manager', 'status' => 'Inactive'],
        ];

        return view('users', compact('users'));
    }
}
