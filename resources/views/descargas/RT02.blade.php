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
                                                    <th style="color:white;">Nombre del proveedor</th>
                                                    <th style="color:white;">Monto de las compras</th>
                                                    <th style="color:white;">Facturas al credito</th>
                                                    <th style="color:white;">Facturas al contado</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach($resultados1 as $res)
                                                <tr>
                                                    <td>{{$res->nombre_proveedor}}</td>
                                                    <td>${{$res->montoFacturas}}</td>
                                                    <td>{{$res->credito}}</td>
                                                    <td>{{$res->contado}}</td>
                                                   
                                                </tr>
                                                @endforeach

                                            </tbody>
    </table>
</body>
</html>