<div class="main-content"  style="margin-left:300px;font-family:cursive;" >
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        Duree : <?php echo $duree ;?> jours.
                        <div class="row">
                            <?php for($i = 0 ; $i<count($regime) ; $i++) { ?>
                                <div class="row m-t-25" >
                                <div class="col-sm-6 col-lg-12" style="background-color:white; height: 350px;box-shadow:5px 5px 5px 1px;border-radius:5%;">
                                    <div >
                                        <div>
                                            <div>
                                                <div class="text p-t-30">
                                                    <a href="<?php echo su('CompletionController/getDetails/'.$regime[$i]['id_regime'].$duree);?>"><img src="<?php echo su('/assets/images/c1.jpg');?>" style="width: 300px; height: 200px;"></a>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="text p-t-30">
                                                    <h2><?php echo $price[$i];?> Ar</h2>
                                                </div>
                                            </div>
                                            <div>
                                                <form action="<?php echo su('RegimeController/insertRegimeUser');?>" method="post">
                                                    <input type="hidden" name="regime" value="<?php echo $regime[$i]['id_regime'];?>">
                                                    <input type="submit" value="valider">
                                                </form>
                                            </div>
                                            <div class="overview-chart">
                                                <canvas id="widgetChart1"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
</div></div></div></div>