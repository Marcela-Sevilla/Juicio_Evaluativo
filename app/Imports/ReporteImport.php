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
            'ficha_programa' => $row['Ficha_Programa'],
            'tipo_documento' => $row['Tipo_de_Documento'],
            'numero_documento' => $row['Numero_de_Documento'],
            'nombre_aprendiz' => $row['Nombre_Aprendiz'],
            'trimestre_I_2020' => $row['TRIMESTRE_I_2020'],
            'trimestre_II_2020' => $row['TRIMESTRE_II_2020'],
            'trimestre_III_2020' => $row['TRIMESTRE_III_2020'],
            'trimestre_IV_2020' => $row['TRIMESTRE_IV_2020'],
            'trimestre_I_2021' => $row['TRIMESTRE_I_2021'],
            'trimestre_II_2021' => $row['TRIMESTRE_II_2021'],
            'trimestre_III_2021' => $row['TRIMESTRE_III_2021'],
            'trimestre_IV_2021' => $row['TRIMESTRE_IV_2021'],
            'trimestre_I_2022' => $row['TRIMESTRE_I_2022'],
            'trimestre_II_2022' => $row['TRIMESTRE_II_2022'],
            'trimestre_III_2022' => $row['TRIMESTRE_III_2022'],
            'trimestre_IV_2022' => $row['TRIMESTRE_IV_2022'],
            'trimestre_I_2023' => $row['TRIMESTRE_I_2023'],
            'trimestre_II_2023' => $row['TRIMESTRE_II_2023'],
            'estado' => $row['Estado'],
            'competencia' => $row['Competencia'],
            'resultado_aprendizaje' => $row['Resultado_de_Aprendizaje'],
            'jucio_evaluacion' => $row['Juicio_de_Evaluacion'],
            'funcionario_registro_juicio' => $row['Funcionario_que_registro_el_juicio_evaluativo'],
        ]);
    }

    public function batchSize(): int
    {
        return 4000;
    }

    public function chunkSize(): int
    {
        return 4000;
    }

}
