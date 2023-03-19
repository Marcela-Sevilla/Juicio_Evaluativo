<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'ficha_programa',
        'tipo_documento',
        'numero_documento',
        'nombre_aprendiz',
        'trimestre_I_2020',
        'trimestre_II_2020',
        'trimestre_III_2020',
        'trimestre_IV_2020',
        'trimestre_I_2021',
        'trimestre_II_2021',
        'trimestre_III_2021',
        'trimestre_IV_2021',
        'trimestre_I_2022',
        'trimestre_II_2022',
        'trimestre_III_2022',
        'trimestre_IV_2022',
        'trimestre_I_2023',
        'trimestre_II_2023',
        'estado',
        'competencia',
        'resultado_aprendizaje',
        'jucio_evaluacion',
        'funcionario_registro_juicio',
    ];
    
}
