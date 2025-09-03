<?php

namespace App\Exports;

use App\Models\Interesado;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InteresadosExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Interesado::select('nombre', 'telefono', 'correo', 'autorizaContacto', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'Nombre',
            'Teléfono',
            'Correo',
            'Autorización',
            'Fecha de Registro',
        ];
    }
}
