<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;

class CustomerController extends Controller
{
    public function create() {
        Customer::create([
            'name' => 'Demo Customer',
            'email' => 'demo@gmail.com',
            'phone' => '0332948124',
            'address' => 'Hà Nội',
            'password' => bcrypt(123456)
        ]);
    }
}
