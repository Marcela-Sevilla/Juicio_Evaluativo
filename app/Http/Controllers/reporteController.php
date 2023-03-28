<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;
use App\Imports\ReporteImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Collection;

class reporteController extends Controller
{
    public function index()
    {
        // $reportes = Reporte::all();
        return view('welcome');

    }

    public function store(Request $request)
    {
            
        $file = $request->file('fileExcel');
        Excel::import(new ReporteImport, $file);

        return redirect()->route('reporte');
        
    }
}
