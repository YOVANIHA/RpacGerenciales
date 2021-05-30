<!DOCTYPE html>
<html lanf="eng">

<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
    .table,
    .thead,
    .tr,
    .th,
    .td {
        width: 100%;
        border: 1px solid;
        border-collapse: collapse;
        text-align: center;
    }
    </style>
</head>

<body>

    <strong>Reporte: </strong>{{$tipoReporte->codigo_tipo_reporte}} - {{$tipoReporte->descripcion}}<br><br>
    <div class="position-absolute top-0 start-50 translate-middle">
        <strong>PERIODO</strong><br>
    </div>
    <strong>Fecha inicial: </strong>{{fechaConFormato($fechaInicial)}}<br>
    <strong>Fecha final: </strong>{{fechaConFormato($fechaFinal)}}<br>
    <strong> </strong><br>
    <table class="table table-striped table-bordered first">
        <thead style="background-color:black;text-align:center;">
            <tr>
                <th style="color:white;">Proveedor</th>
                <th style="color:white;">Cantidad de ordenes de compra</th>
                <th style="color:white;">Monto total ($)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultados as $res)
            <tr>
                <td>{{$res->nombre_proveedor}}</td>
                <td>{{$res->cantidad}}</td>
                <td>{{$res->total}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>