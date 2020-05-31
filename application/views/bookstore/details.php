<?php $this->load->view('header');?>
<style>
    .paraimg
{
    overflow:hidden;
    border:1px solid #154360;
    -webkit-border-radius: 5px;
    border-radius: 5px;

}
.box-blue {

overflow:hidden;
margin-top: 5px;
background-color:#fff;
border:1px solid #fff;
-webkit-border-radius: 5px;
border-radius: 5px;
}
.box-blue:hover{
    background-color:#154360;
    color:#fff;
}
.boto34{
overflow:hidden;
background-color:#fff;
border:1px solid #154360;
-webkit-border-radius: 5px;
border-radius: 5px;
}
.boto34:hover{
    background-color:#154360;
    color:#fff;
}
.botoregresar{
overflow:hidden;
background-color:#fff;
border:1px solid #D35400;
-webkit-border-radius: 5px;
border-radius: 5px;
color: #000;
}
.botoregresar:hover{
    background-color:#D35400;
    color:#fff;
}
</style>
<div class="row bg-title" style="margin-top:-25px;">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                    <!--<h5>Click to rate:</h5>
                    <div>&nbsp;
                    <span class='your-choice-was' style='display: none;'>
                        Your rating was <span class='choice'></span>.
                    </span>
                    </div> -->
                        <div class="white-box">
                            <h3 class="box-title">Detalles del libro</h3>
                            
                                <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="col-md-2 col-lg-2 col-sm-2">
                                        <img src="<?=base_url()?>storage/images/<?=$libro->img?>" class="responsive img-preview paraimg" id="my_img" style="width: 220px; height:300px;">
                                        <div class='starrr' id="starrr" style="width: 220px; padding-top:1em;"></div>
                                    </div>
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-8">
                                        Titulo:
                                        <input type="text" name="title" id="title" class="form-control box-blue" readonly value="<?=$libro->title?>"><br>
                                        Autor:
                                        <input type="text" name="author" id="author" class="form-control box-blue" value="<?=$libro->author?>" readonly><br>
                                        Descripción:
                                        <textarea type="description" name="description" id="description" class="form-control box-blue" readonly><?=$libro->description?></textarea><br>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                        <a href="<?=base_url()?>" class="btn btn-block botoregresar">Regresar</a>
                                        </div>
                                        <div class="col-md-2"></div>

                                    </div>
                                    
                                    </div>
                                </div>
                                <br>

                                <br>
                                <div class="row">
                                    

                                </div>
                                <hr>
                            
                        </div>
                    </div>
                </div>

<?php $this->load->view('footer') ;?>

<script>
    $('.starrr').starrr({
        rating: <?=$rating->rating?>,
        change: function(e, value){
            //console.log(<?=$libro->id?>, value);
            dataEntry('<?=base64_encode($libro->id)?>', value);
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
</script>