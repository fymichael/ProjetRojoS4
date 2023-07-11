<div class="row m-t-30" style="width: 500px;margin-left: 500px;">
        <div class="col-md-12">
        <form action="" method="post">
                <td class="text-right">
                    <input type="button" class="au-btn au-btn--block au-btn--blue m-b-20" value="Payer" style="width: 100px;">
                </td>
        </form>
    <?php if(isset($erreur)) { ?>
        <?php echo $erreur;?>
    <?php } ?>
                    <div class="table-responsive m-b-40" style="width: 700px;">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Jours</th>
                                    <th>Matin</th>
                                    <th>Dejeuner</th>
                                    <th>Diner</th>
                                    <th>Sport</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php for($i = 0 ; $i < count($matin);$i++) { ?>
                                        <td>Jours <?php echo $i+1;?></td>
                                        <td><?php echo $matin[$i]['nom_plats'];?></td>
                                        <td><?php echo $dejeuner[$i]['nom_plats'];?></td>
                                        <td><?php echo $diner[$i]['nom_plats'];?></td>
                                        <td><?php echo $matin[$i]['nom_sports'];?></td>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
    </div>
</div>
</div>