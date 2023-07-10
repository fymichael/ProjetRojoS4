<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="row">
            <div class="col-md-5" style="margin-left: 300px;">
                <div class="card">
                    <div class="card-header"> Insertion Completion </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2"> Completion </h3>
                        </div>
                        <hr>
                        <form action="<?php echo su('CompletionController/addCompletion'); ?>" method="get">
                            <div class="form-group">
                                <label for="taille" class="control-label mb-1"> Taille </label>
                                <input id="taille" name="taille" type="text" class="form-control" aria-required="true"
                                    aria-invalid="false" value="100.00">
                            </div>
                            <div class="form-group has-success">
                                <label for="poids" class="control-label mb-1"> Poids </label>
                                <input id="poids" name="poids" type="text" class="form-control poids valid"
                                    data-val="true" data-val-required="Please enter the name on card"
                                    autocomplete="poids" aria-required="true" aria-invalid="false"
                                    aria-describedby="poids-error">
                                <span class="help-block field-validation-valid" data-valmsg-for="poids"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="objectif" class="control-label mb-1"> Choisissez votre objectifs </label>
                                <select id="objectif" name="idObjectif" class="form-control">
                                    <?php for ($i = 0; $i < count($listObjectif); $i++) { ?>
                                        <option value="<?php echo $listObjectif[$i]['id_objectif']; ?>"> <?php echo $listObjectif[$i]['nom_objectif']; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-12-md">
                                <div class="form-group">
                                    <label for="objectif" class="control-label mb-1"> Objectif </label>
                                    <input id="objectif" name="objectif" type="tel" class="form-control objectif" value=""
                                        data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-objectif="Please enter a valid month and year" placeholder="Kg"
                                        autocomplete="objectif">
                                    <span class="help-block" data-valmsg-for="objectif" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount"> Completion </span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>