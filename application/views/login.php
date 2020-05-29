<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>LibrosYuc | Login Page</title>
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
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(<?=base_url();?>assets/img/login-bg/login-bg-11.jpg)"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Libros</b> Yuc</h4>
                    <p>
                        Inicia sesión para acceder al catalogo de libros disponibles.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span class="logo"></span> <b>Libros</b> Yuc
                        <small>Inicia sesión para continuar.</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="<?=base_url()?>login" method="POST" class="margin-bottom-0" onsubmit="findUser(event, this)">
                        <div class="form-group m-b-15">
                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Correo electrónico" required />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Contraseña" required />
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Iniciar sesión</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            ¿Aún no tienes cuenta? Presiona <a href="<?=base_url()?>registro" class="text-success">aqui</a> para registrarte.
                        </div>
                        <hr />
                        <p class="text-center text-grey-darker">
                            &copy; LibrosYuc Derechos reservados 2020
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
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
        
        function findUser(e, form){
            e.preventDefault();
            var formData = new FormData(form);
            $.ajax({
                // la URL para la petición
                url : '<?=base_url()?>login',
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
                            text: 'Algo ha salido mal, vuelve a intentar',
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
        }
	</script>
</body>
</html>
