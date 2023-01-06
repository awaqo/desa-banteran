<?php

namespace App\Imports;

use App\Models\DataBantuan;
use Maatwebsite\Excel\Concerns\ToModel;

class DataBantuanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataBantuan([
            'id' => $row[0],
            'nama' => $row[1],
            'nik' => $row[2],
            'alamat' => $row[3],
            'jenis_bantuan' => $row[4],
            'nominal' => $row[5],
        ]);
    }
}
