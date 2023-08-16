<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Products;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = Users::count();
        $productCount = Products::count();

        return view('dashboard', compact('userCount', 'productCount'));
    }
}
