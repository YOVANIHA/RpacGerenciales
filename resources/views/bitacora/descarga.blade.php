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

    <strong>REPORTE DE BITÁCORA</strong><br>
    <table class="table table-striped table-bordered first">
        <thead style="background-color:black;text-align:center;">
            <tr>
                <th style="color:white;">Fecha</th>
                <th style="color:white;">Persona que emitió el reporte</th>
                <th style="color:white;">Reporte realizado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultados as $res)
            <tr>
                <td>{{fechaConFormato($res->fecha)}}</td>
                <td>{{$res->nombres}} {{$res->apellidos}}</td>
                <td>{{$res->descripcion}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>