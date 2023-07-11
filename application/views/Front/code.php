<div class="col-lg-3 m-t-150" style="margin-left: 700px;">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <form action="<?php echo su('codeController/updateCode')?>" method="post">
                                                            <td>
                                                                <input type="text" class="au-input au-input--full" name="code" placeholder="Entrer le code">
                                                            </td>
                                                                <td class="text-right">
                                                                    <input type="submit" class="au-btn au-btn--block au-btn--blue m-b-20" value="Valider">
                                                                </td>
                                                        </form>
                                                    </tr>
                                                    <?php for($i=0 ;$i<count($code);$i++){ ?>
                                                    <tr>
                                                        <td><?php echo $code[$i]['code'];?></td>
                                                        <td class="text-right"><?php echo $code[$i]['montant'];?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>