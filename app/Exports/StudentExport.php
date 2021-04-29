<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        return Student::all();
    }

    public function headings(): array
    {
        return [
            'code',
            'name',
            'email',
        ];
    }
}
