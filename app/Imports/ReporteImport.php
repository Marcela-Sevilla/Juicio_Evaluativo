<?php

namespace App\Imports;

use App\Models\Reporte;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ReporteImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Reporte([
            'ficha_programa' => $row[0],
            'tipo_documento' => $row[1],
            'numero_documento' => $row[2],
            'nombre_aprendiz' => $row[3],
            'trimestre_I_2020' => $row[4],
            'trimestre_II_2020' => $row[5],
            'trimestre_III_2020' => $row[6],
            'trimestre_IV_2020' => $row[7],
            'trimestre_I_2021' => $row[8],
            'trimestre_II_2021' => $row[9],
            'trimestre_III_2021' => $row[10],
            'trimestre_IV_2021' => $row[11],
            'trimestre_I_2022' => $row[12],
            'trimestre_II_2022' => $row[13],
            'trimestre_III_2022' => $row[14],
            'trimestre_IV_2022' => $row[15],
            'trimestre_I_2023' => $row[16],
            'trimestre_II_2023' => $row[17],
            'estado' => $row[18],
            'competencia' => $row[19],
            'resultado_aprendizaje' => $row[20],
            'jucio_evaluacion' => $row[21],
            'funcionario_registro_juicio' => $row[22],
        ]);
    }

    public function batchSize(): int
    {
        return 5000;
    }

    public function chunkSize(): int
    {
        return 5000;
    }

}
