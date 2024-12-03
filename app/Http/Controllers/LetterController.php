<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\User;
use App\Models\LetterType;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $letter = Letter::with('notulisUser')->get(); // Muat relasi notulisUser
        $letterType = LetterType::all();
        $guru = User::all();

        return view('letter.index', compact('letter', 'letterType', 'guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $letterType = LetterType::all();
        $guru = User::where('role', 'guru')->get();
        return view('letter.create', compact('letterType', 'guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'letter_perihal' => 'required|string|max:255',
            'letter_type_id' => 'required|exists:letter_types,id',
            'content' => 'required|string',
            'recipients' => 'nullable|array',
            'attachment' => 'nullable|file|mimes:pdf,docx,jpg,png|max:2048',
            'notulis' => 'required|exists:users,id',
        ]);

        // Proses recipients menjadi JSON
        $recipients = [];
        if ($request->recipients) {
            $recipients = User::whereIn('id', $request->recipients)
                ->get()
                ->map(function ($user) {
                    return [
                        'id' => $user->id,
                        'name' => $user->name,
                        'role' => $user->role,
                    ];
                })
                ->toArray();
        }

        // Proses attachment jika ada
        $attachmentPath = $request->file('attachment') ? $request->file('attachment')->store('attachments') : null;

        // Simpan data surat
        Letter::create([
            'letter_perihal' => $request->letter_perihal,
            'letter_type_id' => $request->letter_type_id,
            'content' => $request->content,
            'recipients' => json_encode($recipients),
            'attachment' => $attachmentPath,
            'notulis' => $request->notulis,
        ]);

        return redirect()->route('letters.index')->with('success', 'Surat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Letter $letter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Letter $letter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Letter $letter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Letter $letter)
    {
        //
    }
}
