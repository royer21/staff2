<div class="page-header">
	
	<h1>Control de Asistencia<small> Actividades Oficiales en la UNJBG</small></h1>
</div>

	<?= form_open('agenda/search', array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Evento', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/create','Agregar',array('class'=>'btn'))?>
	<?= form_close(); ?>

<table class="table table-condensed table-bordered" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Procedencia</th>
			<th>Evento</th>		
			<th>Descripcion</th>
			<th>Lugar</th>
			<th>Categoria</th>
			<th>Fecha</th>
			<th>Hora</th>
			<th>Asistio</th>
			

			
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td><?= anchor('agenda/edit/'.$registro->id,$registro->id) ; ?></td>
			
			<td><?= $registro->procedencia ?></td>
			<td><?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></td>
			<td><?= $registro->descripcion ?></td>
			<td><?= $registro->lugar ?></td>
			<td><?= $registro->categoria ?></td>
			<td><?= $registro->fecha ?></td>
			<td><?= $registro->hora ?></td>
			<td><?= $registro->asistencia ?></td>
			
		
			
			
		</tr>

		<?php endforeach; ?>


	</tbody>
		

			

</table>

	<div class="form-actions">
				
				<?= anchor('agenda/index', 'regresar', array('class'=>'btn')); ?>
				</div>