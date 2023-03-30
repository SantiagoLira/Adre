<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Calidad</title>
</head>
<body>
    <div class="text-center">
        <h1 class="text-center"> Lista de reportes de calidad</h1>
    </div>
    
<div >
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">correo</th>
                <th scope="col">cargo</th>
                <th scope="col">fecha de reporte</th>
                <th scope="col">cantidad</th>
                <th scope="col">precio de compra</th>
                <th scope="col">Descripcion</th>
                <th scope="col">maquina</th>
            </tr>
        </thead>
        <tbody>
        @foreach($resultReportesC as $consulta)
            <tr>
                <th>{{$consulta->id_reporteC}}</th>
                <td>{{$consulta->nombre}}</td>
                <td>{{$consulta->correo}}</td>
                <td>{{$consulta->cargo}}</td>
                <td>{{$consulta->fecha_reporte}}</td>
                <td>{{$consulta->cantidad}}</td>
                <td>{{$consulta->precio_compra}}</td>
                <td>{{$consulta->descripcion}}</td>
                <td>{{$consulta->maquina}}</td>
                
            </tr>
        @endforeach
            
        </tbody>
    </table>
</div>
</body>
</html>