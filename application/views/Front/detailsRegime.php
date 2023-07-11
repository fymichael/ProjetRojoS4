<div class="table-responsive table-responsive-data2 m-t-100" style="margin-left: 600px;">
                        <h5>La valeur du regime avec la duree de votre traitemet : <?php echo $vola;?>Ar</h5>
                            <table class="table table-data2" style="width: 500px;">
                                <thead>
                                    <tr>
                                        <th>Nom du plat</th>
                                        <th>Categorie</th>
                                        <th>Sport</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i = 0 ; $i < count($regime);$i++) { ?>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <?php echo $regime[$i]['nom_plats'];?>
                                                </td>
                                                <td>
                                                    <?php echo $regime[$i]['nom_categorie_plats'];?>
                                                </td>
                                                <td>
                                                    <?php echo $regime[$i]['nom_sports'];?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>