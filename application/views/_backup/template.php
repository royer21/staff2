	<body>
		<!-- Barra superior fija con opciones principales de menú -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"> <?= $titulo ?> </a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <?= my_menu_ppal(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contenido dividos en 2, una parte izquierda para el menú, una parte central para las vistas -->
		<div class="container-fluid">
            <div class="row-fluid">
            	<!-- Menú del sistema -->
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header"> Menú Usuario </li>
                             <?= my_menu_ppal(); ?>
                        </ul>
                    </div>
                </div>

                <!-- Contenido de la aplicación -->
                <div class="span9">
                    
                	<?= $this->load->view($contenido) ?>

                </div>
            </div>

            <hr>

