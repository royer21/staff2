<?= form_open('empleado/update', array('class'=>'form-horizontal')); ?>
	<legend> Actualizar Registro </legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="control-group">
		<?= form_label('ID', 'id', array('class'=>'control-label')); ?>
		<span class="uneditable-input"><?= $registro->id ;?></span>
		<?= form_hidden('id', $registro->id); ?>
	</div>

	<div class="control-group">
		<?= form_label('Codigo', 'codigo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'codigo','id'=>'codigo','value'=>$registro->codigo)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Nombres', 'nombres', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'nombres','id'=>'nombres','value'=>$registro->nombres)); ?>
	</div>

	<div class="control-group">
		<?= form_label('Apellidos', 'apellidos', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'apellidos','id'=>'apellidos','value'=>$registro->apellidos)); ?>
	</div>

	<div class="control-group">
		<?= form_label('sueldo', 'sueldo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'sueldo','id'=>'sueldo','value'=>$registro->sueldo)); ?>
	</div>

	<div class="control-group">
		<?= form_label('cargo', 'cargo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'cargo','id'=>'cargo','value'=>$registro->cargo)); ?>
	</div>

	<div class="control-group">
		<?= form_label('descripcion', 'descripcion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'descripcion','id'=>'descripcion','value'=>$registro->descripcion)); ?>
	</div>



	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('empleado/index', 'Cancelar', array('class'=>'btn')); ?>
		<?= anchor('empleado/delete/'.$registro->id , 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('¿Está Seguro?')")); ?>	
	</div>
<?= form_close(); ?>
