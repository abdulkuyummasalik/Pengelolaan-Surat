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
        $letter = Letter::all();
        $letterType = LetterType::all();
        $guru = User::all();

        return view('letter.index', compact('letter', 'letterType', 'guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $letter = Letter::all();
        $letterType = LetterType::all();
        $guru = User::where('role', 'guru')->get();
        return view('letter.create', compact('letter', 'letterType', 'guru'));
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

        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $fileName = time() . '-' . $request->file('attachment')->getClientOriginalName();
            $attachmentPath = $request->file('attachment')->storeAs('attachments', $fileName, 'public');
        }

        $letter = new Letter();
        $letter->letter_perihal = $request->letter_perihal;
        $letter->letter_type_id = $request->letter_type_id;
        $letter->content = $request->content;
        $letter->recipients = json_encode($request->recipients);
        $letter->attachment = $attachmentPath;
        $letter->notulis = $request->notulis;
        $letter->save();

        return redirect()->route('letters.index')->with('success', 'Data Surat berhasil ditambahkan!');
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
