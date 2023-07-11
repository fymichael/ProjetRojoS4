<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row">
            <div class="col-md-6 p-4" style="margin-left: 300px;">
                <div class="card">
                    <div class="card-header">
                        Ajout
                        <strong>Plats</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('PlatsController/addPlats'); ?>" method="get"
                            class="form-horizontal">
                            <div class="row form-group">
                                <label for="input-small-plats" class="form-control-label"> Nom Plats </label>
                                <input type="text" id="input-small-plats" name="Plats"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <div class="row form-group">
                                <label for="prix-plats" class="form-control-label"> Prix </label>
                                <input type="number" id="prix-plats" name="prix"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <div class="row form-group">
                                <label for="catPlats" class="control-label"> Choisissez une catégorie </label>
                                <select id="listCatPlats" name="idCatPlats" class="form-control">
                                    <?php for ($i = 0; $i < count($listCatPlats); $i++) { ?>
                                        <option value="<?php echo $listCatPlats[$i]['id_categorie_plats']; ?>"> <?php echo $listCatPlats[$i]['nom_categorie_plats']; ?> </option>
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
                                        <td> Nom du Plats </td>
                                        <td> Prix </td>
                                    </tr>
                                    <?php for ($i = 0; $i < count($listPlats); $i++) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $listPlats[$i]['nom_plats']; ?>
                                            </td>
                                            <td>
                                                <?php echo $listPlats[$i]['prix_plats']; ?>
                                            </td>
                                            <td>
                                                <a class="item" data-toggle="modal" data-target="#mediumModal"
                                                    data-Platsid="<?php echo $listPlats[$i]['id_plats']; ?>"
                                                    data-nomPlats="<?php echo $listPlats[$i]['nom_plats']; ?>" href="#">
                                                    <i class="zmdi zmdi-edit" style="color: white;"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo bu('PlatsController/delete/'.$listPlats[$i]['id_plats']); ?>">
                                                    <i class="zmdi zmdi-delete" style="color: white;"></i>
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

<div class="modal fade" id="mediumModal" tabindex="-1" aria-labelledby="mediumModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        Modification
                        <strong>Plats</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('PlatsController/updatePlats'); ?>" method="get"
                            class="form-horizontal">
                            <div class="row form-group">
                                <label for="input-small-plats" class="form-control-label"> Nom Plats </label>
                                <input type="text" id="input-small-plats" name="Plats"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <input type="hidden" id="platsId" name="platsId">
                            <div class="row form-group">
                                <label for="prix-plats" class="form-control-label"> Prix </label>
                                <input type="number" id="prix-plats" name="prix"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <div class="row form-group">
                                <label for="catPlats" class="control-label"> Choisissez une catégorie </label>
                                <select id="listCatPlats" name="idCatPlats" class="form-control">
                                    <?php for ($i = 0; $i < count($listCatPlats); $i++) { ?>
                                        <option value="<?php echo $listCatPlats[$i]['id_categorie_plats']; ?>"> <?php echo $listCatPlats[$i]['nom_categorie_plats']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.item').click(function (event) {
            event.preventDefault();

            var PlatsId = $(this).data('platsid');
            var nomPlats = $(this).data('nomplats');

            // Mettre à jour les champs du formulaire dans le modal avec les valeurs récupérées
            $('#input-small-plats').val(nomPlats);
            $('#platsId').val(PlatsId);
        });

        $('#mediumModal').on('hidden.bs.modal', function () {
            // Réinitialiser les champs du formulaire lorsque le modal est fermé
            $('#input-small-plats').val('');
            $('#platsId').val('');
        });
    });

</script>