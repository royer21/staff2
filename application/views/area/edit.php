<?= form_open('area/update', array('class'=>'form-horizontal')); ?>
	<legend> Actualizar Registro </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="control-group">
		<?= form_label('ID', 'id', array('class'=>'control-label')); ?>
		<span class="uneditable-input"><?= $registro->id ;?></span>
		<?= form_hidden('id', $registro->id); ?>
	</div>
	
	<div class="control-group">
		<?= form_label('nombre', 'nombre', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'nombre','id'=>'nombre','value'=>$registro->nombre)); ?>
	</div>

	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('area/index', 'Cancelar', array('class'=>'btn')); ?>
		<?= anchor('area/delete/'.$registro->id , 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('¿Está Seguro?')")); ?>	
	</div>
<?= form_close(); ?>
