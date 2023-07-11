<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row">
            <div class="col-md-6 p-4" style="margin-left: 300px;">
                <div class="card">
                    <div class="card-header">
                        Ajout
                        <strong>Regime</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('RegimeController/addRegime'); ?>" method="get"
                            class="form-horizontal">
                            <div class="row form-group">
                                <label for="input-small" class="form-control-label"> Nom regime </label>
                                <input type="text" id="input-small" name="regime"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <div class="row form-group">
                                <label for="objectif" class="control-label"> Choisissez un objectif </label>
                                <select id="objectif" name="idObjectif" class="form-control">
                                    <?php for ($i = 0; $i < count($listObjectif); $i++) { ?>
                                        <option value="<?php echo $listObjectif[$i]['id_objectif']; ?>"> <?php echo $listObjectif[$i]['nom_objectif']; ?> </option>
                                    <?php } ?>
                                </select>
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
                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                    <div class="au-card-inner">
                        <div class="table-responsive">
                            <table class="table table-top-countries">
                                <tbody>
                                    <tr>
                                        <td> Nom du regime </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php for ($i = 0; $i < count($listRegime); $i++) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $listRegime[$i]['nom_regime']; ?>
                                            </td>
                                            <td>
                                                <a class="item" data-toggle="modal" data-target="#mediumModalAjout"
                                                    data-regimeid="<?php echo $listRegime[$i]['id_regime']; ?>"
                                                    data-nomregime="<?php echo $listRegime[$i]['nom_regime']; ?>" href="#">
                                                    <i class="zmdi zmdi-plus" style="color: white;"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="item" data-toggle="modal" data-target="#mediumModalUpdate"
                                                    data-regimeid="<?php echo $listRegime[$i]['id_regime']; ?>"
                                                    data-nomregime="<?php echo $listRegime[$i]['nom_regime']; ?>" href="#">
                                                    <i class="zmdi zmdi-edit" style="color: white;"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo bu('RegimeController/delete/' . $listRegime[$i]['id_regime']); ?>"
                                                    <i class=" zmdi zmdi-delete" style="color: white;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mediumModalAjout" tabindex="-1" aria-labelledby="mediumModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        Ajout detail du
                        <strong>regime</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('RegimeController/addDetailRegime'); ?>" method="get"
                            class="form-horizontal">
                            <div class="row form-group">
                                <label for="sports" class="control-label"> Choisissez un sport </label>
                                <select id="sports" name="idSports" class="form-control">
                                    <?php for ($i = 0; $i < count($listSports); $i++) { ?>
                                        <option value="<?php echo $listSports[$i]['id_sports']; ?>"> <?php echo $listSports[$i]['nom_sports']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="hidden" id="regimeId" name="regimeId">
                            <div class="row form-group">
                                <label for="plats" class="control-label"> Choisissez un plat </label>
                                <select id="plats" name="idPlats" class="form-control">
                                    <?php for ($i = 0; $i < count($listPlats); $i++) { ?>
                                        <option value="<?php echo $listPlats[$i]['id_plats']; ?>"> <?php echo $listPlats[$i]['nom_plats']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="mediumModalUpdate" tabindex="-1" aria-labelledby="mediumModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        Modification
                        <strong>Regime</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('RegimeController/updateRegime'); ?>" method="get"
                            class="form-horizontal">
                            <div class="row form-group">
                                <label for="input-small" class="form-control-label"> Nom regime </label>
                                <input type="text" id="input-small" name="regime"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <input type="hidden" id="regimeId" name="regimeId">
                            <!-- Champ caché pour stocker l'ID du régime -->
                            <div class="row form-group">
                                <label for="objectif" class="control-label"> Choisissez un objectif </label>
                                <select id="objectif" name="idObjectif" class="form-control">
                                    <?php for ($i = 0; $i < count($listObjectif); $i++) { ?>
                                        <option value="<?php echo $listObjectif[$i]['id_objectif']; ?>"> <?php echo $listObjectif[$i]['nom_objectif']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-primary" value="Confirm">
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.item').click(function (event) {
            event.preventDefault();

            var regimeId = $(this).data('regimeid');

            // Mettre à jour les champs du formulaire dans le modal avec les valeurs récupérées
            $('#regimeId').val(regimeId);
        });

        $('#mediumModal').on('hidden.bs.modal', function () {
            // Réinitialiser les champs du formulaire lorsque le modal est fermé
            $('#regimeId').val('');
        });
    });
</script>