<?= form_open('base/update', array('class'=>'form-horizontal')); ?>
	<legend> Actualizar Registro </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="control-group">
		<?= form_label('ID', 'id', array('class'=>'control-label')); ?>
		<span class="uneditable-input"><?= $registro->id ;?></span>
		<?= form_hidden('id', $registro->id); ?>
	</div>

	<div class="control-group">
		<?= form_label('orden', 'orden', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'orden','id'=>'orden','value'=>$registro->orden)); ?>
	</div>
	
	<div class="control-group">
		<?= form_label('nombre', 'nombre', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'nombre','id'=>'nombre','value'=>$registro->nombre)); ?>
	</div>

	<div class="control-group">
		<?= form_label('ubicacion', 'ubicacion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'ubicacion','id'=>'ubicacion','value'=>$registro->ubicacion)); ?>
	</div>

	<div class="control-group">
		<?= form_label('jefe', 'jefe', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'jefe','id'=>'jefe','value'=>$registro->jefe)); ?>
	</div>

	<div class="control-group">
		<?= form_label('celular', 'celular', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'celular','id'=>'celular','value'=>$registro->celular)); ?>
	</div>



	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('base/index', 'Cancelar', array('class'=>'btn')); ?>
		<?= anchor('base/delete/'.$registro->id , 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('¿Está Seguro?')")); ?>	
	</div>
<?= form_close(); ?>
