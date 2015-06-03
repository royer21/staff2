<?= form_open('agenda/insert', array('class'=>'form-horizontal')); ?>
	<legend> Crear Actividad Oficial  </legend>

	<?= my_validation_errors(validation_errors()); ?>

		<?php $procedencia=array('OCIM'=>'OCIM','REDO'=>'REDO','SEGE'=>'SEGE');		 
			  $ambito=array('Local'=>'Local','Regional'=>'Regional','Nacional'=>'Nacional','Internacional'=>'Internacional'); 
			  $tipo=array('Academico'=>'Academico','Institucional'=>'Institucional','Cultural'=>'Cultural','Empresarial'=>'Empresarial','Recreativo'=>'Recreativo','Deportivo'=>'Deportivo');
			  $categoria=array('Programado'=>'Programado','Invitacion'=>'Invitacion'); 
			  $asistencia=array('si'=>'si','no'=>'no'); ?>

		<div class="control-group">
		<?= form_label('Procedencia', 'procedencia', array('class'=>'control-label')); ?>
		<?= form_dropdown('procedencia',$procedencia,array('class'=>'control-label')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Evento', 'evento', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'evento','id'=>'evento','placeholder'=>'Evento....', 'value'=>set_value('evento'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Ambito', 'ambito', array('class'=>'control-label')); ?>
		<?= form_dropdown('ambito',$ambito,array('class'=>'control-label')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Tipo', 'tipo', array('class'=>'control-label')); ?>
		<?= form_dropdown('tipo',$tipo,array('class'=>'control-label')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Categoria', 'categoria', array('class'=>'control-label')); ?>
		<?= form_dropdown('categoria',$categoria,array('class'=>'control-label')); ?>
		</div>

		<div class="control-group">
		<?= form_label('Fecha', 'fecha', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'date','name'=>'fecha','id'=>'fecha','placeholder'=>'Fecha....', 'value'=>set_value('fecha'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Hora', 'hora', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'hora','id'=>'hora','placeholder'=>'hora....', 'value'=>set_value('hora'))); ?>
		

		</div>

		<div class="control-group">
		<?= form_label('Duración', 'duracion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'duracion','id'=>'duracion','placeholder'=>'Duración....', 'value'=>set_value('duracion'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Lugar', 'lugar', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'lugar','id'=>'lugar','placeholder'=>'Lugar....', 'value'=>set_value('lugar'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Descripción', 'descripcion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'descripcion','id'=>'descripcion','placeholder'=>'Descripción....', 'value'=>set_value('descripcion'))); ?>
		</div>

		<div class="control-group">
		<?= form_label('Asistencia', 'asistencia', array('class'=>'control-label')); ?>
		<?= form_dropdown('asistencia',$asistencia,array('class'=>'control-label')); ?>
		</div>

		
		<div class="control-group">
		<?= form_label('Id de usuario', 'usuario_id', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'usuario_id','id'=>'usuario_id', 'value'=>$this->session->userdata('usuario_id'))); ?>
		</div>

	
		<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>

		
		<?= anchor('agenda/index', 'Cancelar', array('class'=>'btn')); ?>
		</div>


<?= form_close(); ?>
