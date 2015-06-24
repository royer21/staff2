<?= form_open('cargo/insert', array('class'=>'form-horizontal')); ?>
	<legend> Crear Registro de Cargo</legend>

	<?= my_validation_errors(validation_errors()); ?>

	<div class="control-group">
		<?= form_label('Nombre', 'nombre', array('class'=>'control-label')); ?>
		<?= form_input(array('type'=>'text','name'=>'nombre','id'=>'nombre','placeholder'=>'nombre....', 'value'=>set_value('descripcion'))); ?>
	</div>
	
	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Guardar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('cargo/index', 'Cancelar', array('class'=>'btn')); ?>
	</div>
<?= form_close(); ?>
