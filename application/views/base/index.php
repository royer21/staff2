<div class="page-header">
	<h1>Bases <small>Mantenimiento de Registros</small></h1>
</div>

<table id="example" class="table table-condensed">
	<thead>
		<tr>
			<th>Nro</th>
			<th>NOMBRE DE BASE</th>
			<th>UBICACION</th>
			<th>JEFE DE BASE</th>
			<th>CELULAR</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td><?php echo $registro->orden; ?></td>
			<td><?php echo $registro->nombre; ?></td>
			<td><?php echo $registro->ubicacion; ?></td>
			<td><?php echo $registro->jefe; ?></td>
			<td><?php echo $registro->celular; ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>