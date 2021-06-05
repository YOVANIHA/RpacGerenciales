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
    <strong>PERIODO 1</strong><br>
    <strong>Fecha inicial: </strong>{{fechaConFormato($fechaInicial)}}<br>
    <strong>Fecha final: </strong>{{fechaConFormato($fechaFinal)}}<br>
    <strong>PERIODO 2</strong><br>
    <strong>Fecha inicial: </strong>{{fechaConFormato($fechaInicial2)}}<br>
    <strong>Fecha final: </strong>{{fechaConFormato($fechaFinal2)}}<br>
    <strong> </strong><br>
    <table class="table table-striped table-bordered first">
        <thead style="background-color:black;text-align:center;">
            <tr>
            <th style="color:white;">Código aduana</th>
            <th style="color:white;">Nombre aduana</th>
            <th style="color:white;">Monton para periodo 1 ($)</th>
            <th style="color:white;">Monton para periodo 2 ($)</th>
            <th style="color:white;">Variación ($)</th>
            <th style="color:white;">Variación (%)</th>
            </tr>
        </thead>
        <tbody>
        @foreach($resultados as $res)
        @foreach($resultados2 as $res2)
            <tr>
            <td>{{$res->codigo_aduana}}</td>
            <td>{{$res->nombre_aduana}}</td>
            <td>{{$res->suma1}}</td>
            <td>{{$res2->suma2}}</td>
            <td>{{$res->suma1-$res2->suma2}}</td>
            <td>{{round((($res->suma1-$res2->suma2)/$res2->suma2),2)}}</td>
            </tr>
        @endforeach
        @endforeach
        </tbody>
    </table>
</body>
</html>