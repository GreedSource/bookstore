<?php $this->load->view('header');?>
<?php $this->load->view('banner');?>
                <div class="row bg-title" style="margin-top:-25px;">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent sales</h3>

                            <div class="row">
                            <!--for($i=0; $i<12; $i++)-->
                                <?php foreach($libros as $libro) {?>
                                    <div class="col-md-3">
                                    <img src="<?=base_url()?>storage/images/<?=$libro->img?>" class="responsive" style="width: 220px; height:300px;">
                                    <h5><?=$libro->title?></h5>
                                    <h5><?=$libro->author?></h5>
                                    <p class="clasificacion">
                                        <input id="radio1" type="radio" name="estrellas" value="1">
                                        <!--
                                        --><label for="radio1">★</label>
                                        <!--
                                        --><input id="radio2" type="radio" name="estrellas" value="2">
                                        <!--
                                         --><label for="radio2">★</label>
                                        <!--
                                            --><input id="radio3" type="radio" name="estrellas" value="3">
                                        <!--
                                            --><label for="radio3">★</label>
                                        <!--
                                            --><input id="radio4" type="radio" name="estrellas" value="4">
                                        <!--
                                            --><label for="radio4">★</label>
                                        <!--
                                            --><input id="radio5" type="radio" name="estrellas" value="5">
                                        <!--
                                            --><label for="radio5">★</label>
                                    </p>

                                </div>
                                <?php } ?>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
<?php $this->load->view('footer') ;?>