		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/bootstrap-responsive.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/micss.css') ?>" rel="stylesheet">
		<link href="<?= base_url('js/jquery.js') ?>" rel="stylesheet">
		<link href="<?= base_url('js/bootstrap-datetimepicker.min.js') ?>" rel="stylesheet">

<div class="page-header">
	
	<h1>Agenda Institucional<small> Actividades Oficiales en la UNJBG</small></h1>
</div>
	<?php
		 $opciones= array(
			'01'	=>	'Enero',
			'02'	=>	'Febrero',
			'03'	=>	'Marzo',
			'04'	=>	'Abril',
			'05'	=>	'Mayo',
			'06'	=>	'Junio',
			'07'	=>	'Julio',
			'08'	=>	'Agosto',
			'09'	=>	'Septiembre',
			'10'	=>	'Octubre',
			'11'	=>	'Noviembre',
			'12'	=>	'Diciembre'
		);
			$year = array(
			'2013'=>'2013',
			'2014'=>'2014',
			'2015'=>'2015',
			'2016'=>'2016',
			'2017'=>'2017'
		);
		 ?>



	<?= form_open('agenda/search_month_year', array('class'=>'form-search')); ?>
		<?= form_label('mes', 'mes', array('class'=>'control-label')); ?>
		<?= form_dropdown('mes',$opciones);?>

		
		<?= form_label('Año', 'year', array('class'=>'control-label')); ?>
		<?= form_dropdown('year',$year);?>
		<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"> </i>', 'class'=>'btn btn-primary')); ?>

	<?= form_close(); ?>
 
<table class="table table-condensed table-bordered" >
	<thead>
		<tr>
		<!--<th>ID</th>-->
			<th>Procedencia</th> 
			<th>Evento</th>		
			<th>Descripcion</th>
			<th>Lugar</th>
		<!--<th>Categoria</th>-->
			<th>Fecha</th>
			<th>Hora</th>
			<th>Duración</th>
			<th> creado por </th>
		<!--<th>Ambito</th>
		<th>Tipo</ 
			<th>Creado</th>
			<th>Modificado</th>-->
			

			
		</tr>
	</thead>	

	<tbody>
		<?php foreach ($query as $registro): ?>
		<tr>
		<!--<td><?= anchor('agenda/edit/'.$registro->id,$registro->id) ; ?></td>-->
			
			<td><?= $registro->procedencia ?></td>
			<td><?= anchor('agenda/detalles/'.$registro->id,$registro->evento) ; ?></td>
			<td><?= $registro->descripcion ?></td>
			<td><?= $registro->lugar ?></td>
		<!--<td><?= $registro->categoria ?></td>-->
			<td><?= $registro->fecha ?></td>
			<td><?= $registro->hora ?></td>
			<td><?= $registro->duracion?></td>
			<th><?= $registro->usuario_id ?> </th>
		<!--<td><?= $registro->ambito ?></td>
			<td><?= $registro->tipo ?></td>	-->
			<?php date("d/m/Y - H:i ", strtotime($registro->created)); ?>
			<?php date("d/m/Y - H:i ", strtotime($registro->updated)); ?>
	
			
			
		</tr>
		<?php endforeach; ?>
		<?php echo $this->pagination->create_links();
		?>
	</tbody>
		


</table>

	