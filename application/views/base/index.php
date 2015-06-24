<div class="contenedor-tabla" style="text-transform:lowercase">
	<div class="page-header">
		
		<h1>Bases <small>Mantenimiento de Registros</small></h1>
	</div>
	<!-- 
	<?php 

	 ?>
		<?= form_open('base/index/', array('class'=>'form-search')); ?>
			<?= form_input(array('type'=>'text', 'name'=>'buscar', 'id'=>'buscar', 'placeholder'=>'Buscar por Descripcion...', 'class'=>'input-medium search-query', 'value' => $value)); ?>
			<?= form_button(array('type'=>'submit', 'content'=>'<i class="icon-search"></i>', 'class'=>'btn btn-primary')); ?>
			<?= anchor('base/create','Agregar',array('class'=>'btn'))?>
		<?= form_close();?>

	<?php 

			if (empty($query)) {
				
				echo "
				<tr>
					<td>No se encontraron registros. <a href='../base/index'>Regresar a la lista</a></td>
				</tr>
				";
			} else {

			 ?>

	<?php 
		if ($value != FALSE) {
			echo 'Se encontraron '.count($query).' coincidencias de la búsqueda "'.$value.'".';
		}
	 ?>  -->
<?php //echo var_dump($query) ?>
	<table id="example" class="table table-condensed table-bordered display " cellspacing="0" width="100%" >
		<thead>
			<tr>
				<th>N°</th>
				<th>Nombre de Base</th>
				<th>Ubicación</th>
				<th>Jefe de Base</th>
			<!-- <th>Celular<th> -->
			</tr>
		</thead>	

		<tbody>
			
			<?php 
			//$output = json_encode($query);
			//echo var_dump($output);
			foreach ($query as $registro): ?>
			<tr>
				<td><?= anchor('base/edit/'.$registro->id,$registro->orden) ; ?></td>
				<td><?= $registro->nombre ?></td>
				<td><?= $registro->ubicacion ?></td>
				<td><?= $registro->jefe ?></td>
				<td><?= $registro->celular ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
			
	</table>

	<?php } ?>
	<?= anchor('base/create','Agregar',array('class'=>'btn'))?>
	<button class="btn btn-primary" onclick="lanzarReporte()">
		Generar PDF
	</button>
	<script type="text/javascript">
		function lanzarReporte(){
			var peticion = document.getElementsByTagName("input")[0].value;
			window.open('http://localhost/staff/base/generapdf/'+peticion, 'Reporte de Bases');
		}
	</script>


</div>