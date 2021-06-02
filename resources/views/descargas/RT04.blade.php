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
     <strong>Nivel de Existencias: </strong>{{$existencias}}<br>
    <strong> </strong><br>
    <table class="table table-striped table-bordered first">
        <thead style="background-color:black;text-align:center;">
            <tr>
                <th style="color:white;">Nombre de la Materia Prima</th>
                <th style="color:white;">Tipo de la Materia Prima</th>
                <th style="color:white;">Cantidad de Existencias por materia prima </th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultados as $res)
            <tr>
                <td>{{$res->nombre_materia_prima}}</td>
                <td>{{$res->nombre_tipo_materia_prima}}</td>
                <td>{{$res->existencias}}</td>
            </tr>
            @endforeach
        </tbody>
       
    </table>
</body>
</html>