<?php

namespace App\Http\Controllers;

use App\Exports\LetterTypeExport;
use App\Models\LetterType;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LetterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lettersType = LetterType::paginate(10);
        return view("klasifikasi_letter.index", compact("lettersType"));
    }

    public function test()
    {
        return view("klasifikasi_letter.download");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Dapatkan tanggal hari ini dalam format dmy (ddmmy)
        $today = Carbon::now()->format('dmy');

        // Hitung jumlah surat yang dibuat pada hari ini
        $countToday = LetterType::whereDate('created_at', Carbon::today())->count();

        // Nomor urut surat untuk hari ini
        $nextNumber = str_pad($countToday + 1, 2, '0', STR_PAD_LEFT); // Format: 01, 02, 03, dst.

        // Gabungkan tanggal dengan nomor urut
        $letterCode = "{$today}-{$nextNumber}";

        return view("klasifikasi_letter.create", compact("letterCode"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name_type" => "required|string"
        ]);

        // Buat kode surat otomatis
        $today = Carbon::now()->format('dmy');
        $countToday = LetterType::whereDate('created_at', Carbon::today())->count();
        $nextNumber = str_pad($countToday + 1, 2, '0', STR_PAD_LEFT);
        $letterCode = "{$today}-{$nextNumber}";

        // Simpan data ke database
        $letter = new LetterType();
        $letter->letter_code = $letterCode;
        $letter->name_type = $request->name_type;
        $letter->save();

        return redirect()->route("klasifikasi_letter.index")->with("success", "Berhasil Menambahkan Data Klasifikasi Surat");
    }


    /**
     * Display the specified resource.
     */
    public function show(LetterType $letterType, $id)
    {
        $guru = User::where('role', 'guru')->get();
        $letter = LetterType::find($id);
        return view("klasifikasi_letter.show", compact("letter", "guru"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LetterType $letterType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LetterType $letterType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LetterType $letterType, $id)
    {
        $letterType = LetterType::find($id);
        $letterType->delete();
        return redirect()->route("klasifikasi_letter.index")->with("deleted", "Berhasil Menghapus Data Klasifikasi Surat");
    }

    public function export()
    {
        $file_name = 'Klasifikasi-Surat.xlsx';
        return Excel::download(new LetterTypeExport(), $file_name);
    }

    public function downloadPdf($id)
    {
        $guru = User::where('role', 'guru')->get();
        $letter = LetterType::find($id);
        view()->share('letter', $letter);
        $pdf = FacadePdf::loadView('klasifikasi_letter.download', compact('letter', 'guru'));
        return $pdf->download('klasifikasi_letter.pdf');
    }
}
