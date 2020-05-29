<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>LibrosYuc | Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url();?>assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>assets/css/default/style.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="<?=base_url();?>assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    
    <link href="<?=base_url()?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url();?>assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(<?=base_url();?>assets/img/login-bg/login-bg-9.jpg)"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Libros</b> Yuc</h4>
                    <p>
                        Crea una cuenta para acceder al catalogo de libros disponibles.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Registro de usuarios.
                    <small>Crea una cuenta para ingresar.</small>
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form method="POST" class="margin-bottom-0" onsubmit="register(event, this)">
                        <label class="control-label">Nombre <span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-12 m-b-15">
                                <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" required />
                            </div>
                        </div>
                        <label class="control-label">Correo electrónico <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico" required />
                            </div>
                        </div>
                        <label class="control-label">Re-ingresar correo electrónico <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="confirmation" name="confirmation" placeholder="Re-ingresar correo electrónico" required />
                            </div>
                        </div>
                        <label class="control-label">Contraseña <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required />
                            </div>
                        </div>
                        
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Registrarse</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            ¿Ya estás registrado? Presiona <a href="<?=base_url()?>login">aqui</a> para login.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; LibrosYuc Derechos reservados 2020
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
      
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url();?>assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?=base_url();?>assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?=base_url();?>assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?=base_url();?>assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url();?>assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url();?>assets/js/theme/default.min.js"></script>
	<script src="<?=base_url();?>assets/js/apps.min.js"></script>
    <script src="<?=base_url()?>assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.redirect.js"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
        });
        function register(e, form){
            e.preventDefault();
            if($('#email').val() == $("#confirmation").val()){
                var formData = new FormData(form);
                $.ajax({
                    // la URL para la petición
                    url : '<?=base_url()?>registro',
                    // la información a enviar
                    // (también es posible utilizar una cadena de datos)
                    data : formData,

                    // especifica si será una petición POST o GET
                    type : 'POST',

                    // el tipo de información que se espera de respuesta
                    // dataType : 'json',

                    // código a ejecutar si la petición es satisfactoria;
                    // la respuesta es pasada como argumento a la función
                    async: false,
                    success : function(data) {
                        //alert(data);
                        console.log(data);
                        if(data > 0){
                            $.redirect('<?=base_url()?>');
                        }else{
                            $.toast({
                                heading: 'Error',
                                text: 'El usuario ya existe',
                                showHideTransition: 'fade',
                                icon: 'error',
                                position: 'top-right'
                            });
                        }
                    },
                    // código a ejecutar si la petición falla;
                    // son pasados como argumentos a la función
                    // el objeto de la petición en crudo y código de estatus de la petición
                    error : function(xhr, status) {
                        alert("error de solicitud");
                    },
                    cache: false,
                    contentType: false,
                    processData: false
                    // código a ejecutar sin importar si la petición falló o no
                    //complete : function(xhr, status) {
                        //alert('Petición realizada');
                    //}
                });
            }else{
                $.toast({
                    heading: 'Error',
                    text: 'El correo ingresado no coincide',
                    showHideTransition: 'fade',
                    icon: 'error',
                    position: 'top-right'
                });
            }
        }
	</script>
</body>
</html>
