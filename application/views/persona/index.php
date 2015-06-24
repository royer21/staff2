<style>
	.minus{
		text-transform: lowercase !important;
	}


</style>

<div class="contenedor-tabla">
	<div class="page-header">
	
		<h1>Personal   <small>Mantenimiento de Registros</small></h1>
	</div>
<!--
	<?php	$opciones=$this->Model_Persona->get_bases(); ?>
	<?php	$opciones2=$this->Model_Persona->get_areas(); ?>
	<div class="row">
		<div class="span3">
			<?= form_open('persona/search', array('class'=>'form-search')); ?>
			<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Nombre...', 'class'=>'input-medium search-query')); ?>
			<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
			<?= anchor('persona/pdf/'.$value,'generar pdf',array('class'=>'btn'))?>
			
		<?= form_close();?>
		</div>
		<div class="span3">
			<?= form_open('persona/search_base', array('class'=>'form-search')); ?>			
			<?= form_input(array('type'=>'text', 'name'=>'buscar_base', 'id'=>'buscar', 'placeholder'=>'Buscar por base...', 'class'=>'input-medium search-query')); ?>
			<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
			<?= anchor('persona/pdf2/'.$value,'generar pdf',array('class'=>'btn pull-left'))?>

		<?= form_close();?>
		</div>
		<div class="span3">
			
		<?= form_open('persona/search_area', array('class'=>'form-search')); ?>
			<?= form_input(array('type'=>'text', 'name'=>'buscar_area', 'id'=>'buscar', 'placeholder'=>'Buscar por area...', 'class'=>'input-medium search-query')); ?>
			<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
			<?= anchor('persona/pdf3/'.$value,'generar pdf',array('class'=>'btn'))?>
		<?= form_close();?> 	
		
		</div> -->

	</div>
	<div class="row" style="margin=10px" >
		<?= anchor('persona/create','Agregar',array('class'=>'btn'))?>			
	</div>
			
	<br>

	<table id="example" class="table display table-striped table-bordered text-capitalize" cellspacing="0" width="100%" >
		<thead class="text-capitalize">
			<tr>
				<th>#</th>
				<th>base</th>
				<th>DNI</th>
				<th>Nombres</th>
				<th>Ap. Paterno</th>
				<th>Ap. Materno</th>
				<th>Telefono</th>
				<th>Ocupación</th>			
				<th>Estado</th>
				<th>area</th>
				<th>Cargo</th>
				<th>Fecha Inicio</th>
				<th>Tiempo Empleo</th>
			</tr>
		</thead>	

		<tbody class="text-capitalize">
			<?php foreach ($query as $registro): ?>
			<tr>
				<td><?= anchor('persona/edit/'.$registro->id,$registro->id) ; ?></td>
				<td class="minus"><?= $registro->base_nombre ?></td>
				<td class="minus"><?= $registro->dni ?></td>
				<td class="minus"><?= $registro->nombres ?></td>
				<td class="minus"><?= $registro->apellido_pat ?></td>
				<td class="minus"><?= $registro->apellido_mat ?></td>
				<td class="minus"><?= $registro->telefono ?></td>
				<td class="minus"><?= $registro->ocupacion ?></td>			
				<td class="minus"><?= $registro->estado ?></td>
				<td class="minus"><?= $registro->area_nombre ?></td>
				<td class="minus"><?= $registro->cargo ?></td>
				<td class="minus"><?= $registro->fecha_inicio ?></td>
				<td class="minus"><?= $registro->tiempo_empleo ?></td>					
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<button class="btn btn-primary" onclick="lanzarReporte()">		
		Generar PDF
	</button>


	<button class="btn btn-success" onclick="lanzarReporte2()">		
		Generar busqueda area PDF
	</button>
	<!-- 
	<button class="btn btn-warning" onclick="lanzarReporte3()">		
		Generar busqueda base PDF
	</button>
	-->
	<script type="text/javascript">  


		function lanzarReporte(){
			var peticion = document.getElementsByTagName("input")[0].value;
			window.open('http://localhost/staff/persona/generapdf/'+peticion, 'Reporte de Personal');
		}

		function lanzarReporte2(){
			var peticion = document.getElementsByTagName("input")[0].value;
			window.open('http://localhost/staff/persona/generapdfarea/'+peticion, 'Reporte de Personal');
		}

		function lanzarReporte3(){
			var peticion = document.getElementsByTagName("input")[0].value;
			window.open('http://localhost/staff/persona/generapdfbase/'+peticion, 'Reporte de Personal');
		}
	</script>
				
	
			<!--     para poner llaamar datos  data['datos']= ' tanto tanot' : <?= $datos	;?> :3 -->
		
</div>