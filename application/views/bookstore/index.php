<?php $this->load->view('header');?>
<?php $this->load->view('banner');?>
                <div class="row bg-title" style="margin-top:-25px;">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                    <!--<h5>Click to rate:</h5>
                    <div>&nbsp;
                    <span class='your-choice-was' style='display: none;'>
                        Your rating was <span class='choice'></span>.
                    </span>
                    </div> -->
                        <div class="white-box">
                            <h3 class="box-title">Recent sales</h3>
                            <div class="row">
                            <!--for($i=0; $i<12; $i++)-->
                                <?php foreach($libros as $libro) {?>
                                    <div class="col-md-2 col-sm-2 col-lg-2">
                                    <img src="<?=base_url()?>storage/images/<?=$libro->img?>" class="responsive img-preview" style="width: 220px; height:300px;">
                                    <h5><?=$libro->title?></h5>
                                    <h5>por <?=$libro->author?></h5>
                                    <div class='starrr' id="rating<?=$libro->id?>"></div>
                                    <input type="hidden" name="book_id<?=$libro->id?>" id="book_id<?=$libro->id?>" value="<?=base64_encode($libro->id)?>">
                                </div>
                                <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                
<?php $this->load->view('footer') ;?>
<script>
    var libros = JSON.parse('<?=json_encode($rating)?>');
    
    //console.log(libros);
    console.log(libros)
    $( document ).ready(function() {
        /*for (var i = 1; i <= 5; i++) {
            iniciar_rating(i);
        }*/
        for(var k in libros) {
            iniciar_rating(libros[k]['id'], libros[k]['rating']);
        }
        function iniciar_rating(i, value){
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
            url : '<?=base_url()?>calificar/libro',
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
                    $.toast({
                            heading: 'Exito',
                            text: 'Se ha calificado el libro exitosamente.',
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-center'
                        });
                }else{
                    $.toast({
                            heading: 'Error',
                            text: 'Algo ha salido mal, vuelve a intentar',
                            showHideTransition: 'fade',
                            icon: 'error',
                            position: 'top-center'
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
    
    function redirect(){
        $.redirect('<?=base_url()?>ver/libro', {user: "johnDoe", password: "12345"}, "POST", "_blank");
    }

</script>