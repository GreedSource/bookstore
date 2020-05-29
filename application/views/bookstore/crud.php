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
                            <h3 class="box-title">Añadir libro</h3>
                            <form method="post" onsubmit="dataEntry(event, this)" enctype="multipart/form-data">
                                <div class="row">
                                <div class="col-md-4 col-lg-4 col-sm-4">
                                    <div class="col-md-2 col-lg-2 col-sm-2">
                                        <img src="<?=base_url()?>storage/images/default.jpg" class="responsive img-preview paraimg" id="my_img" style="width: 220px; height:300px;" onclick="openWindow()">
                                        <input id="userfile" name="userfile" type="file" class="img-file " onchange="readURL(this)" style="display:none;" />
                                    </div>
                                    </div>
                                    <div class="col-md-8 col-lg-8 col-sm-8">
                                        Titulo:
                                        <input type="text" name="title" id="title" class="form-control box-blue" required><br>
                                        Autor:
                                        <input type="text" name="author" id="author" class="form-control box-blue" required><br>
                                        Descripción:
                                        <textarea type="description" name="description" id="description" class="form-control box-blue" required> </textarea><br>
                                        <div class="col-md-4">
                                        <input type="submit" class="btn btn-block  boto34" value="Guardar" >
                                        </div>

                                    </div>
                                    
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
                <?=getcwd()?>
                <!-- ============================================================== -->
<?php $this->load->view('footer') ;?>

<script>
    function openWindow(){
        document.getElementById("userfile").click()
    }
    function readURL(input) {
        var url = input.value;
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#my_img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }else{
            $('#my_img').attr('src', '<?=base_url()?>storage/images/default.jpg');
        }
    }

    function dataEntry(e, form){
        e.preventDefault();
        var formData = new FormData(form);

        if ($('#userfile').get(0).files.length === 0) {
            $.toast({
                heading: 'Error',
                text: 'No se ha selecciona portada del libro',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-center'
            })
        }else{
            $.ajax({
                // la URL para la petición
                url : '<?=base_url()?>agregar/libro',
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
                            text: 'Se ha agregado el libro exitosamente.',
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-center'
                        });
                        $(form).trigger("reset");
                        $('#my_img').attr('src', '<?=base_url()?>storage/images/default.jpg');
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
        
    }

</script>