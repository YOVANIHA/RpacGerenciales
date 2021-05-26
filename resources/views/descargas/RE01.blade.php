<!DOCTYPE html>
<html lanf="eng">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>

		.table, .thead, .tr, .th, .td{
			width: 100%;
			border: 1px solid;
            border-collapse: collapse;
            text-align: center;
		}

	</style>
</head>
<body>

    <strong>Reporte: </strong>{{$tipoReporte->codigo_tipo_reporte}} - {{$tipoReporte->descripcion}}<br>
    <strong>Fecha inicial: </strong>{{fechaConFormato($fechaInicial)}}<br>
    <strong>Fecha final: </strong>{{fechaConFormato($fechaFinal)}}<br>
    <strong> </strong><br>
    <table class="table table-striped table-bordered first">
        <thead style="background-color:black;text-align:center;">
            <tr>
                <th style="color:white;">Código aduana</th>
                <th style="color:white;">Nombre aduana</th>
                <th style="color:white;">Tiempo promedio de llegadas de pedidos (dias)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultados as $res)
            <tr>
                <td>{{$res->codigo_aduana}}</td>
                <td>{{$res->nombre_aduana}}</td>
                <td>{{$res->tiempoPromedioLlegadas}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>