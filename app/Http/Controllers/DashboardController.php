<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $guruCount = User::where('role', 'guru')->count();
        $staffCount = User::where('role', 'staff')->count();

        return view('dashboard', compact('guruCount', 'staffCount'));
    }
}
