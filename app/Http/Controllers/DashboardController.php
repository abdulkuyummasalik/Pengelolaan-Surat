<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Letter;
use App\Models\LetterType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $guruCount = User::where('role', 'guru')->count();
        $staffCount = User::where('role', 'staff')->count();
        $letterInCount = Letter::where('notulis', Auth::user()->id)->count();
        $letterType = LetterType::all()->count();
        $letter = Letter::all()->count();

        return view('dashboard', compact('guruCount', 'staffCount','letterType','letter', 'letterInCount'));
    }
}
