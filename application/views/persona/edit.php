<?= form_open('persona/update', array('class'=>'form-horizontal')); ?>
	<legend> Actualizar Registro </legend>

	<?= my_validation_errors(validation_errors()); ?>
	
	<div class="row">
		<div class="span1">				

		</div>
		<div class="span4">
			
			<legend> Datos Personales </legend>

				<div class="control-group">
					<?= form_label('ID', 'id', array('class'=>'control-label')); ?>
					<span class="uneditable-input"><?= $registro->id ;?></span>
					<?= form_hidden('id', $registro->id); ?>
				</div>

				<div class="control-group">
					DNI
					<?= form_input(array('type'=>'text','name'=>'dni','id'=>'dni','value'=>$registro->dni)); ?>
				</div>

				<div class="control-group">
					Nombres
					<?= form_input(array('type'=>'text','name'=>'nombres','id'=>'nombres','value'=>$registro->nombres)); ?>
				</div>

				<div class="control-group">
					Ap.Paterno
					<?= form_input(array('type'=>'text','name'=>'apellido_pat','id'=>'apellido_pat','value'=>$registro->apellido_pat)); ?>
				</div>

				<div class="control-group">
					Ap.Materno
					<?= form_input(array('type'=>'text','name'=>'apellido_mat','id'=>'apellido_mat','value'=>$registro->apellido_mat)); ?>
				</div>

				<div class="control-group">
					Telefono
					<?= form_input(array('type'=>'text','name'=>'telefono','id'=>'telefono','value'=>$registro->telefono)); ?>
				</div>

				<div class="control-group">
					Ocupación
					<?= form_input(array('type'=>'text','name'=>'ocupacion','id'=>'ocupacion','value'=>$registro->ocupacion)); ?>
				</div>


		</div>
	
		

		<div class="span5">
			
			<legend> Datos Trabajador </legend>

					
			<div class="control-group">
		        <?= form_label('Area', 'area_id', array('class'=>'control-label')); ?>
		        <?= form_dropdown('area_id', $areas, $registro->area_id); ?>
		    </div>
			
			<div class="control-group">
				<?= form_label('cargo', 'cargo', array('class'=>'control-label')); ?>
				<?= form_input(array('type'=>'text','name'=>'cargo','id'=>'cargo','value'=>$registro->cargo)); ?>
			</div>

			<div class="control-group">
				<?= form_label('estado', 'estado', array('class'=>'control-label')); ?>
				<?= form_input(array('type'=>'text','name'=>'estado','id'=>'estado','value'=>$registro->estado)); ?>
			</div>

			<div class="control-group">
				<?= form_label('fecha_inicio', 'fecha_inicio', array('class'=>'control-label')); ?>
				<?= form_input(array('type'=>'date','name'=>'fecha_inicio','id'=>'fecha_inicio','value'=>$registro->fecha_inicio)); ?>
			</div>
	
			<div class="control-group">
		        <?= form_label('Bases', 'base_id', array('class'=>'control-label')); ?>
		        <?= form_dropdown('base_id', $bases, $registro->base_id ); ?>
		    </div>

		    <div class="control-group">
		        <?= form_label('Tiempo Empleo', 'tiempo_empleo', array('class'=>'control-label')); ?>
		        <?= form_input(array('type'=>'text','name'=>'tiempo_empleo','id'=>'tiempo_empleo','value'=>$registro->tiempo_empleo)); ?>
		    </div>

			<div class="control-group">
				<?= form_label('observacion', 'observacion', array('class'=>'control-label')); ?>
				<?= form_input(array('type'=>'text','name'=>'observacion','id'=>'observacion','value'=>$registro->observacion)); ?>
			</div>

		  

		</div>
		<div class="span1">
			
		</div>
		   

		
	</div>




	<div class="form-actions">
		<?= form_button(array('type'=>'submit', 'content'=>'Aceptar', 'class'=>'btn btn-primary')); ?>
		
		<?= anchor('persona/index', 'Cancelar', array('class'=>'btn')); ?>
		<?= anchor('persona/delete/'.$registro->id , 'Eliminar', array('class'=>'btn btn-warning','onClick'=>"return confirm('¿Está Seguro?')")); ?>	
	</div>
<?= form_close(); ?>
