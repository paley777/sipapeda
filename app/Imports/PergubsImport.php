<?php

namespace App\Imports;

use App\Models\Pergub;
use Maatwebsite\Excel\Concerns\ToModel;

class PergubsImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Hanya membuat entri baru jika produk_hukum tidak kosong
        if (!empty($row[0])) {
            return new Pergub([
                'produk_hukum' => $row[0],
                'sanksi' => $row[1] ?? null,
                'file' => $row[3] ?? null,
            ]);
        }
        // Jika produk_hukum kosong, return null untuk melewati row ini
        return null;
    }
}
