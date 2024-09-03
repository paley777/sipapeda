<?php

namespace App\Imports;

use App\Models\Perda;
use Maatwebsite\Excel\Concerns\ToModel;


class PerdasImport implements ToModel
{
    public function model(array $row)
    {
        // Hanya membuat entri baru jika produk_hukum tidak kosong
        if (!empty($row[0])) {
            return new Perda([
                'produk_hukum' => $row[0],
                'sanksi' => $row[1] ?? null,
                'ls' => $row[2] ?? null,
                'file' => $row[3] ?? null,
            ]);
        }
        // Jika produk_hukum kosong, return null untuk melewati row ini
        return null;
    }
}
