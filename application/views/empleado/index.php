<div class="page-header">
	
	<h1>Empleados  <small>Mantenimiento de Registros</small></h1>
</div>
	<?= form_open('empleado/search', array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Nombre...', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
		<?= anchor('empleado/create','Agregar',array('class'=>'btn'))?>
	<?= form_close();?>


<table class="table table-condensed table-bordered" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Codigo</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Sueldo</th>
			<th>Cargo</th>
			<th>Descripcion</th>
			
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td><?= anchor('empleado/edit/'.$registro->id,$registro->id) ; ?></td>
			<td><?= $registro->codigo ?></td>
			<td><?= $registro->nombres ?></td>
			<td><?= $registro->apellidos ?></td>
			<td><?= $registro->sueldo ?></td>
			<td><?= $registro->cargo ?></td>
			<td><?= $registro->descripcion ?></td>

			
			
		</tr>
		<?php endforeach; ?>
	</tbody>
		


</table>