<div class="page-header">
	
	<h1>Cargos <small>Mantenimiento de Registros</small></h1>
</div>
	<?= form_open('cargo/search', array('class'=>'form-search')); ?>
		<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Descripcion...', 'class'=>'input-medium search-query')); ?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
		<?= anchor('cargo/create','Agregar',array('class'=>'btn'))?>
	<?= form_close();?>


<table class="table table-condensed table-bordered" >
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre de cargo</th>			
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
			<td><?= anchor('cargo/edit/'.$registro->id,$registro->id) ; ?></td>
			<td><?= $registro->nombre ?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>	

		
</table>