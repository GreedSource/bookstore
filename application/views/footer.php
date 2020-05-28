
            </div>

<!-- /.container-fluid -->
<footer class="footer text-center"> </footer>

</div><!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?=base_url()?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/html/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?=base_url()?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?=base_url()?>assets/html/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url()?>assets/html/js/waves.js"></script>
<!--Counter js -->
<script src="<?=base_url()?>assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?=base_url()?>assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!-- chartist chart -->
<script src="<?=base_url()?>assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?=base_url()?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url()?>assets/html/js/custom.min.js"></script>
<script src="<?=base_url()?>assets/html/js/dashboard1.js"></script>
<script src="<?=base_url()?>assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<!-- Starrr JavaScript -->
<script src="<?=base_url()?>assets/dist/starrr.js"></script>

<script>
    $( document ).ready(function() {
        for (var i = 0; i < <?=$count?>; i++) {
            iniciar_rating(i);
        }
        function iniciar_rating(i){
            var value   = $('#rate_value'+i).val();
            var id      = $('#book_id'+i).val();
            $('#rating'+i).starrr({
                rating: value,
                change: function(e, value){
                    dataEntry(id, value);
                    /*if (value) {
                        $('.your-choice-was').show();
                        $('.choice').text(value);
                    } else {
                        $('.your-choice-was').hide();
                    }*/
                }
            });
        }
    });
    
    function dataEntry(id, value){
        var formData = new FormData();
        formData.append('id', id);
        formData.append('rating', value);
        $.ajax({
            // la URL para la petición
            url : '<?=base_url()?>libreria/calificar/libro',
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
                    alert('exito');
                }else{
                    alert('error');
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