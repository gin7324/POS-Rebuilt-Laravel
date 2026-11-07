<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['name' => 'Ava Thompson', 'email' => 'ava.thompson@example.com', 'phone' => '(555) 010-2401', 'status' => 'Active'],
            ['name' => 'Noah Williams', 'email' => 'noah.williams@example.com', 'phone' => '(555) 010-2402', 'status' => 'Active'],
            ['name' => 'Mia Chen', 'email' => 'mia.chen@example.com', 'phone' => '(555) 010-2403', 'status' => 'Pending'],
            ['name' => 'Liam Patel', 'email' => 'liam.patel@example.com', 'phone' => '(555) 010-2404', 'status' => 'Active'],
            ['name' => 'Sofia Martinez', 'email' => 'sofia.martinez@example.com', 'phone' => '(555) 010-2405', 'status' => 'Inactive'],
        ];

        return view('customers', compact('customers'));
    }
}
