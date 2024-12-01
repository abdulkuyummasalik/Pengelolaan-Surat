<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LetterType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $guruCount = User::where('role', 'guru')->count();
        $staffCount = User::where('role', 'staff')->count();
        $letterType = LetterType::all()->count();

        return view('dashboard', compact('guruCount', 'staffCount','letterType'));
    }
}
