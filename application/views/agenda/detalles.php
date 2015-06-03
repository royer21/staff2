<div class="page-header">
	
	<h1> Agenda Institucional <small> Actividades Oficiales en la UNJBG</small></h1>
</div>	

<table class="table" >
	<thead>
		<tr>
			<td>ID</td>
			<td>Procedencia</td>
			<td>Evento</td>		
			<td>Descripcion</td>
			<td>Categoria</td>
			<td>Fecha</td>
			<td>Hora</td>
			<td>Duracion</td>
			<td>Ambito</td>
			<td>Tipo</td>
			<td>Creado</td>
			<td>Modificado</td>
		</tr>
	</thead>	

	<tbody>
		
		<tr>
			<td><?= $registro->id ?></td>
			<td><?= $registro->procedencia ;?> </td>
			<td><?= $registro->evento ;?> </td>
			<td><?= $registro->descripcion ;?> </td>
			<td><?= $registro->categoria ;?> </td>
			<td><?= $registro->fecha ;?> </td>
			<td><?= $registro->hora ;?> </td>
			<td><?= $registro->duracion ;?> </td>
			<td><?= $registro->ambito ;?> </td>
			<td><?= $registro->tipo ;?> </td>
			<td><?= $registro->created ;?> </td>
			<td><?= $registro->updated ;?> </td>


			
		</tr>
	
	</tbody>
		


</table>