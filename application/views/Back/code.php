<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row">
            <div class="col-md-6 p-4" style="margin-left: 300px;">
                <div class="card">
                    <div class="card-header">
                        Ajout
                        <strong>Code</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('CodeController/addCode'); ?>" method="get" class="form-horizontal">
                            <div class="row form-group">
                                <label for="input-small" class="form-control-label"> code </label>
                                <input type="text" id="input-small" name="code"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <div class="row form-group">
                                <label for="input-small" class="form-control-label"> Montant </label>
                                <input type="text" id="input-small" name="montant"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="zmdi zmdi-account-calendar"></i>Listes codes
                        </h3>
                        <button class="au-btn-plus">
                            <i class="zmdi zmdi-plus"></i>
                        </button>
                    </div>
                    <div class="au-task js-list-load">
                        <div class="au-task-list js-scrollbar3">
                            <div class="au-task__item au-task__item--danger">
                                <?php for ($i = 0; $i < count($listCode); $i++) { ?>
                                    <div class="au-task__item au-task__item--primary">
                                        <div class="au-task__item-inner">
                                            <h5 class="task">
                                                <a href="#">
                                                    Numero code :
                                                    <?php echo $listCode[$i]['code']; ?>
                                                </a>
                                            </h5>
                                            <span class="time">
                                                Montant :
                                                <?php echo number_format($listCode[$i]['montant'], 0, ',', ' '); ?> Ar
                                            </span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4" style="margin-left: 300px;margin-top: -200px;">
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>Liste des codes en attentes de validation
            </h3>
            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                            <td> Numero code </td>
                            <td> Montant </td>
                            <td> Etat </td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($listValidateCode); $i++) { ?>
                            <tr>
                                <td>
                                    <div class="table-data__info">
                                        <span>
                                            <a href="#"><?php echo $listValidateCode[$i]['code']; ?></a>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <span><?php echo $listValidateCode[$i]['montant']; ?></span>
                                </td>
                                <td>
                                    <span><?php echo $this->Code_model->getEtatLettre($listValidateCode[$i]['etat']); ?></span>
                                </td>
                                <td>
                                    <span class="role user"><a href="<?php echo bu('CodeController/validate/'.$listValidateCode[$i]['id_code']); ?>" style="color: white;"> valider </a></span>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="user-data__footer">
                <button class="au-btn au-btn-load">load more</button>
            </div>
        </div>
    </div>
</div>