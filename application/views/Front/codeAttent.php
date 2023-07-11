<div class="col-lg-3 m-t-150" style="margin-left: 700px; color: white;">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <?php if(isset($erreur)) { ?>
                                                <?php echo $erreur;?>
                                            <?php } else {  ?>
                                                <h3>En attente d'une validation de l'admin</h3>
                                                    <h5>Le code : <?php echo $code[0]['code'];?></h5>
                                                    <h5>Le montant: <?php echo $code[0]['montant'];?></h5>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>