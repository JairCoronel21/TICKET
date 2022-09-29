<?php
   require_once("../../config/conexion.php");
   if(isset($_SESSION["usu_id"])){
   

?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php") ?>
    <title>JhardSystex - NUEVO TICKET</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php") ?>

	<div class="mobile-menu-left-overlay"></div>

	<?php require_once("../MainNav/nav.php") ?>
	
    <!-- Contenido -->
	<div class="page-content">

		<div class="container-fluid">
        <header class="section-header">


				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
		
        
        
            <div class="box-typical box-typical-padding">
				<p>
					Desde esta area podras generar tus nuevos tickets:
				</p>

                <h5 class="m-t-lg with-border">Ingrese la información</h5>

                <div class="row">
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInput">Categoria</label>
							<select id="exampleSelect" class="form-control">
								<option>Hardware</option>
								<option>Software</option>
								<option>Seguridad</option>
								<option>Otros</option>
							</select>
						</fieldset>
					</div>
					<div class="col-lg-6">
						<fieldset class="form-group">
							<label class="form-label semibold" for="exampleInputEmail1">Titulo</label>
							<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Titulo " >
						</fieldset>
					</div>
					<div class="col-lg-12">
						<fieldset class="form-group semibold">
							<label class="form-label" for="exampleInputPassword1">Descripcion</label>
                                    <div class="summernote-theme-1">
                                        <textarea id="ticket_description" class="summernote" name="name">Hello Summernote</textarea>
                                    </div>
						</fieldset>
					</div>
				</div>

            </div>
     
        
        </div>
        
        <!--.container-fluid-->
	</div><!--.page-content-->

	
   <?php require_once("../mainJS/js.php") ?>
   
   <script type="text/javascript" src="nuevoticket.js"></script>
</body>
</html>

<?php
   } else {
        header("Location:".Conectar::ruta()."index.php");
   }

?>