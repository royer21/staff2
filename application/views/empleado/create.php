<?= form_open('empleado/insert', array('class'=>'form-horizontal')); ?>
	<legend> Crear Registro de Empleado</legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="control-group">
		<?= form_label('Codigo', 'codigo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'codigo','id'=>'codigo','placeholder'=>'codigo....', 'value'=>set_value('codigo'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Nombres', 'nombres', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'nombres','id'=>'nombres','placeholder'=>'Nombres....', 'value'=>set_value('nombres'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Apellidos', 'apellidos', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'apellidos','id'=>'apellidos','placeholder'=>'Apellidos....', 'value'=>set_value('apellidos'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Sueldo', 'sueldo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'sueldo','id'=>'sueldo','placeholder'=>'Sueldo....', 'value'=>set_value('sueldo'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Cargo', 'cargo', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'cargo','id'=>'cargo','placeholder'=>'Cargo....', 'value'=>set_value('cargo'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Descripcion', 'descripcion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'descripcion','id'=>'descripcion','placeholder'=>'Descripcion....', 'value'=>set_value('descripcion'))); ?>
	</div>





	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('empleado/index', 'Cancelar', array('class'=>'btn')); ?>
	</div>
<?= form_close(); ?>
