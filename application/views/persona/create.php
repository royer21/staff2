<?= form_open('persona/insert', array('class'=>'form-horizontal')); ?>
	<legend> Crear Registro de persona</legend>

	<?= my_validation_errors(validation_errors()); ?>
	
	<div class="row">
		<div class="span1">				

		</div>
		<div class="span3">
			
			<legend> Datos Personales </legend>

			<div class="control-group">
				<?= form_input(array('type'=>'text','name'=>'dni','id'=>'dni','placeholder'=>'dni....', 'value'=>set_value('dni'))); ?>
			</div>

			<div class="control-group">
				<?= form_input(array('type'=>'text','name'=>'nombres','id'=>'nombres','placeholder'=>'Nombres....', 'value'=>set_value('nombres'))); ?>
			</div>

			<div class="control-group">
				
				<?= form_input(array('type'=>'text','name'=>'apellido_pat','id'=>'apellido_pat','placeholder'=>'apellido_pat....', 'value'=>set_value('apellido_pat'))); ?>
			</div>

			<div class="control-group">
				
				<?= form_input(array('type'=>'text','name'=>'apellido_mat','id'=>'apellido_mat','placeholder'=>'apellido_mat....', 'value'=>set_value('apellido_mat'))); ?>
			</div>

			<div class="control-group">
				
				<?= form_input(array('type'=>'text','name'=>'telefono','id'=>'telefono','placeholder'=>'telefono....', 'value'=>set_value('telefono'))); ?>
			</div>

			<div class="control-group">
				
				<?= form_input(array('type'=>'text','name'=>'ocupacion','id'=>'ocupacion','placeholder'=>'ocupacion....', 'value'=>set_value('ocupacion'))); ?>
			</div>


		</div>
	
		<div class="span1">
		</div>

		<div class="span5">
			
			<legend> Datos Trabajador </legend>
			
			<div class="control-group">
				Area
		        <?= form_dropdown('area_id', $areas, 0); ?>
		    </div>

			<div class="control-group">
				
				<?= form_input(array('type'=>'text','name'=>'cargo','id'=>'cargo','placeholder'=>'cargo....', 'value'=>set_value('cargo'))); ?>
			</div>

			<div class="control-group">
				
				<?= form_input(array('type'=>'text','name'=>'estado','id'=>'estado','placeholder'=>'estado....', 'value'=>set_value('estado'))); ?>
			</div>						

			<div class="control-group">
				Fecha Inicio
				<?= form_input(array('type'=>'date','name'=>'fecha_inicio','id'=>'fecha_inicio','placeholder'=>'fecha_inicio....', 'value'=>set_value('fecha_inicio'))); ?>
			</div>

			<div class="control-group">
				Tiempo de Empleo
				<?= form_input(array('type'=>'text','name'=>'tiempo_empleo','id'=>'tiempo_empleo','placeholder'=>'tiempo_empleo....', 'value'=>set_value('tiempo_empleo'))); ?>
			</div>
		
			<div class="control-group">
		        base
		        <?= form_dropdown('base_id', $bases, 0); ?>
		    </div>
			
			<div class="control-group">				
				<?= form_input(array('type'=>'text','name'=>'observacion','id'=>'observacion','placeholder'=>'observacion....', 'value'=>set_value('observacion'))); ?>
			</div>
		  

		</div>
		<div class="span1">
			
		</div>
		   

		
	</div>

	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('persona/index', 'Cancelar', array('class'=>'btn')); ?>
	</div>
<?= form_close(); ?>
