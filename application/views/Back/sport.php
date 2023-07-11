<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row">
            <div class="col-md-6 p-4" style="margin-left: 300px;">
                <div class="card">
                    <div class="card-header">
                        Ajout
                        <strong> Activite sportif </strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('SportsController/addSports'); ?>" method="get"
                            class="form-horizontal">
                            <div class="row form-group">
                                <label for="input-sports" class="form-control-label"> Nom d'activite sportif</label>
                                <input type="text" id="input-sports" name="sports"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <div class="row form-group">
                                <label for="input-prix" class="form-control-label"> Prix </label>
                                <input type="number" id="input-prix" name="prix"
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
                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                    <div class="au-card-inner">
                        <div class="table-responsive">
                            <table class="table table-top-countries">
                                <tbody>
                                    <tr>
                                        <td> Nom de l'activite sportif </td>
                                        <td> Prix </td>
                                    </tr>
                                    <?php for ($i = 0; $i < count($listSports); $i++) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $listSports[$i]['nom_sports']; ?>
                                            </td>
                                            <td><?php echo $listSports[$i]['prix_sports']; ?></td>
                                            <td>
                                                <a class="item" data-toggle="modal" data-target="#mediumModal"
                                                    data-sportsid="<?php echo $listSports[$i]['id_sports']; ?>"
                                                    data-nomsport="<?php echo $listSports[$i]['nom_sports']; ?>" href="#">
                                                    <i class="zmdi zmdi-edit" style="color: white;"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo bu('SportsController/delete/'.$listSports[$i]['id_sports']); ?>">
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
                        <strong>sports</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="<?php echo su('SportsController/updateSports'); ?>" method="get"
                            class="form-horizontal">
                            <div class="row form-group">
                                <label for="input-sports" class="form-control-label"> Nom de l'activite sportif</label>
                                <input type="text" id="input-sports" name="Sports"
                                    class="input-sm form-control-sm form-control">
                            </div>
                            <input type="hidden" id="sportsId" name="sportsId">
                            <!-- Champ caché pour stocker l'ID du régime -->
                            <div class="row form-group">
                                <label for="input-prix" class="form-control-label"> Prix </label>
                                <input type="number" id="input-prix" name="prix"
                                    class="input-sm form-control-sm form-control">
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

            var sportsId = $(this).data('sportsid');

            // Mettre à jour les champs du formulaire dans le modal avec les valeurs récupérées
            $('#sportsId').val(sportsId);
        });

        $('#mediumModal').on('hidden.bs.modal', function () {
            // Réinitialiser les champs du formulaire lorsque le modal est fermé
            $('#sportsId').val('');
        });
    });
</script>
