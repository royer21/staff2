<?php echo $error; ?>

<form action="<?php echo base_url('archivo/do_upload'); ?>" method="post" enctype="multipart/form-data">
	<label for="userfile">
		Seleccione un archivo
		<input type="file" name="userfile" id="userfile">
	</label>
	<br>
	<input type="submit" value="Subir">
</form>