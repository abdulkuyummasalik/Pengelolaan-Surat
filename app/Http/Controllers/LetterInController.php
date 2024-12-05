<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\LetterType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LetterInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $letter = Letter::with('notulisUser')->get();
        $letterType = LetterType::all();
        $letterIn = Letter::where('recipients', Auth::user()->id)->get();
        return view('letter_in.index', compact('letterIn', 'letter', 'letterType'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $letterType = LetterType::all();
        $letter = Letter::with('notulisUser')->get();
        $guru = User::where('role', 'guru')->get();
        return view('letter_in.create', compact('letterType', 'guru', 'letter'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
