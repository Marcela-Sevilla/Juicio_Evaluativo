<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Juicio Evaluativo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/datatables.min.css" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar bg-success">
        <div class="container-fluid">
            <h1 class="navbar-brand mb-0 h1 text-white">Reporte de Juicio Evaluativo Sede TIC</h1>
        </div>
    </nav>

    <main class="container mt-5">
        <section class="card border-3 shadow-sm border-success bg-light">
            <div class="card-body">
                <h4 class="card-title text-success">Importar Excel de Reportes por Fichas</h4>
                <form action="" method="post" class="row">
                    @csrf
                    <div class="col-md-9 mb-3">
                        <input class="form-control shadow-sm" type="file" accept=".xlsx" id="fileExcel" name="fileExcel">
                    </div>
                    <div class="col-md-3 mb-3">
                        <button type="submit" class="w-100 btn btn-success fw-semibold shadow-sm">Importar Excel</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="card border-3 shadow-sm border-success bg-light mt-4">
            <div class="card-body">
                <h4 class="card-title text-success">Tabla de Reportes Fichas Sede TIC</h4>
                <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Ficha y Programa</th>
                        <th>Tipo de Documento</th>
                        <th>Nombre Aprendiz</th>
                        <th>TRIMESTRE I 2020</th>
                        <th>TRIMESTRE II 2020</th>
                        <th>TRIMESTRE III 2020</th>
                        <th>TRIMESTRE IV 2020</th>
                        <th>TRIMESTRE I 2021</th>
                        <th>TRIMESTRE II 2021</th>
                        <th>TRIMESTRE III 2021</th>
                        <th>TRIMESTRE IV 2021</th>
                        <th>TRIMESTRE I 2022</th>
                        <th>TRIMESTRE II 2022</th>
                        <th>TRIMESTRE III 2022</th>
                        <th>TRIMESTRE IV 2022</th>
                        <th>TRIMESTRE I 2023</th>
                        <th>TRIMESTRE II 2023</th>
                        <th>Estado</th>
                        <th>Competencia</th>
                        <th>Resultado Aprendizaje</th>
                        <th>Jucio Evaluación</th>
                        <th>Funcionaro</th>
                    </tr>
                </thead>
                </table>
            </div>
        </section>
    </main>
    
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>