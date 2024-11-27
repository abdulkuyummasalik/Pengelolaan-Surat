<?php

namespace App\Exports;

use App\Models\LetterType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LetterTypeExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return LetterType::all();
    }

    public function headings(): array
    {
        return [
            "Kode Surat",
            "Klasifikasi Surat",
            "Surat Tertaut",
        ];
    }

    public function map($model): array
    {
        return [
            $model->letter_code,
            $model->name_type,
            $model->name_type,
        ];
    }
}
