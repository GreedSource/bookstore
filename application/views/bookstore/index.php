<?php $this->load->view('header');?>
<?php $this->load->view('banner');?>
<?php $count = 1;?>
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
                                    <img src="<?=base_url()?>storage/images/<?=$libro->img?>" class="responsive" style="width: 220px; height:300px;">
                                    <h5><?=$libro->title?></h5>
                                    <h5><?=$libro->author?></h5>
                                    <div class='starrr' id="rating<?=$count?>"></div>
                                    <input type="hidden" name="rate_value<?=$count?>" id="rate_value<?=$count?>" value="<?=$count?>">
                                    <input type="hidden" name="book_id<?=$count?>" id="book_id<?=$count?>" value="<?=base64_encode($libro->id)?>">
                                </div>
                                <?php 
                                $count++;
                                } ?>
                                
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
<?php $data['count'] = $count; $this->load->view('footer', $data) ;?>