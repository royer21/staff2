<?= form_open('agenda/update', array('class'=>'form-horizontal')); ?>
	<legend> Actualizar Actividad </legend>

	<?php 	  $procedencia=array('OCIM'=>'OCIM','REDO'=>'REDO','SEGE'=>'SEGE');		 
			  $ambito=array('Local'=>'Local','Regional'=>'Regional','Nacional'=>'Nacional','Internacional'=>'Internacional'); 
			  $tipo=array('Academico'=>'Academico','Institucional'=>'Institucional','Cultural'=>'Cultural','Empresarial'=>'Empresarial','Recreativo'=>'Recreativo','Deportivo'=>'Deportivo');
			  $categoria=array('Programado'=>'Programado','Invitacion'=>'Invitacion'); 
			  $asistencia=array('si'=>'si','no'=>'no'); ?>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="control-group">
		<?= form_label('ID', 'id', array('class'=>'control-label')); ?>
		<span class="uneditable-input"><?= $registro->id ;?></span>
		<?= form_hidden('id', $registro->id); ?>
	</div>

	<div class="control-group">
		<?= form_label('Procedencia', 'procedencia', array('class'=>'control-label')); ?>
		<span class="uneditable-input"><?= $registro->procedencia ;?></span>
		<?= form_dropdown('procedencia',$procedencia,array('class'=>'control-label')); ?>
	</div>

	<div class="control-group">
		<?= form_label('Evento', 'evento', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'evento','id'=>'evento', 'value'=>$registro->evento)); ?>
	</div>

		<div class="control-group">
		<?= form_label('Ambito', 'ambito', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'ambito','id'=>'ambito', 'value'=>$registro->ambito)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Tipo', 'tipo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'tipo','id'=>'tipo', 'value'=>$registro->tipo)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Categoria', 'categoria', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'categoria','id'=>'categoria','value'=>$registro->categoria)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Fecha', 'fecha', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'date','name'=>'fecha','id'=>'fecha','value'=>$registro->fecha)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Hora', 'hora', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'time','name'=>'hora','id'=>'hora', 'value'=>$registro->hora)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Duración', 'duracion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'duracion','id'=>'duracion', 'value'=>$registro->duracion)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Lugar', 'lugar', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'lugar','id'=>'lugar', 'value'=>$registro->lugar)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Descripción', 'descripcion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'descripcion','id'=>'descripcion', 'value'=>$registro->descripcion)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Asistencia', 'asistencia', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'asistencia','id'=>'asistencia', 'value'=>$registro->asistencia)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Creado', 'created', array('class'=>'control-label')); ?>
		<span class="uneditable-input"><?= date("d/m/Y - H:i ", strtotime($registro->created)) ;?></span>
		<?= form_hidden('created', $registro->created); ?>
	</div>

	<div class="control-group">
		<?= form_label('Modificado', 'updated', array('class'=>'control-label')); ?>
		<span class="uneditable-input"><?= date("d/m/Y - H:i ", strtotime($registro->created)); ;?></span>
		<?= form_hidden('updated', $registro->updated); ?>
	</div>

	 			

  	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		<?= anchor('agenda/index', 'Cancelar', array('class'=>'btn')); ?>
		<?= anchor('agenda/delete/'.$registro->id , 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('¿Está Seguro?')")); ?>	
	</div>

<?= form_close(); ?>
