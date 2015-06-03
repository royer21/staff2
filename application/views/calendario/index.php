<div class="page-header">
	<h1> calendario <small> mantenimiento de registros </small> </h1>
</div>


<?=

	$data = array(
                3  => 'http://ejemplo.com/noticias/articulo/2006/03/',
                7  => 'http://ejemplo.com/noticias/articulo/2006/07/',
                13 => 'http://ejemplo.com/noticias/articulo/2006/13/',
                26 => 'http://ejemplo.com/noticias/articulo/2006/26/'
              );


	echo $this->calendar->generate(2014, 5, $data);

		

?>