<?= form_open('base/insert', array('class'=>'form-horizontal')); ?>
	<legend> Crear Registro de base</legend>

	<?= my_validation_errors(validation_errors()); ?>



	<div class="control-group">
		<?= form_label('Nombre', 'nombre', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'nombre','id'=>'nombre','placeholder'=>'nombre....', 'value'=>set_value('descripcion'))); ?>
	</div>

	<div class="control-group">
		<?= form_label('Orden', 'orden', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'orden','id'=>'orden','placeholder'=>'orden....', 'value'=>set_value('orden'))); ?>
	</div>
	
	<div class="control-group">
		<?= form_label('Ubicación', 'ubicacion', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'ubicacion','id'=>'ubicacion','placeholder'=>'ubicacion....', 'value'=>set_value('ubicacion'))); ?>
	</div>
	<div class="control-group">
		<?= form_label('jefe', 'jefe', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'jefe','id'=>'jefe','placeholder'=>'jefe....', 'value'=>set_value('jefe'))); ?>
	</div>
	<div class="control-group">
		<?= form_label('celular', 'celular', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'celular','id'=>'celular','placeholder'=>'celular....', 'value'=>set_value('celular'))); ?>
	</div>



	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Guardar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('base/index', 'Cancelar', array('class'=>'btn')); ?>
	</div>
<?= form_close(); ?>
