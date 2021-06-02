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
                <th style="color:white;">Tipo de documento de transporte</th>
                <th style="color:white;">Fecha de emisión de documentos</th>
                <th style="color:white;">Cantidad de documentos </th>
            </tr>
        </thead>
        <tbody>
            @foreach($resultados as $res)
            <tr>
                <td>{{$res->tipo_documento}}</td>
                <td>{{$res->fecha_emision_doc}}</td>
                <td>{{$res->cantidad}}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                @php
                    $suma=0;
                @endphp
               <td colspan="3" align="right"><strong><i>Cantidad de documentos emitidos en el periodo</i> </strong>
                @foreach($resultados as $res) 
                    @php
                    $suma+=$res->cantidad;
                    @endphp 
                @endforeach
                <strong  style="color:green">  ======> {{$suma}} </strong>
            </td>
            </tr>
        </tfoot>
    </table>
</body>
</html>