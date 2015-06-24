<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/bootstrap-responsive.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/micss.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/jquery.dataTables.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/dataTables.tableTools.css') ?>" rel="stylesheet">
		

			

		<script src="<?= base_url('js/jquery.js') ?>"></script>
		

    	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('js/jquery.dataTables.js') ?>"></script>
    	
		<script src="<?= base_url('js/dataTables.tableTools.js') ?>"></script>
    	

   		
		<script>



$(document).ready( function () {
    $('#example').dataTable( {
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "/swf/copy_csv_xls_pdf.swf"
        }
    } );
} );
		</script>
		<title> Staff </title>


