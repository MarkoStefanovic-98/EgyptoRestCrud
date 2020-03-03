<section id="dieu" class="row tm-section">
    <div class="col-xl-12 col-md-12 col-xs-12">
        <h1 class="text-center">Dieu Egyptiens</h1><br>
        <a href="dieu/ajout">
            <button type="button" class="btn btn-primary">
                Ajouter dieu
            </button>
        </a>
    </div>
    <?php

    foreach ($afficheDieu as $k => $value) {
        $nom_photo = $value['NomDieu'];
        ?>
        <div class="col-xl-4 col-md-4 col-xs-12">


            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./public/img/photos/<?php echo($nom_photo); ?>.jpg" alt="Card image cap"
                     height="250px" width="30px">
                <div class="card-body">
                    <h5><?= $value['NomDieu']; ?></h5>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#<?= $value['NomDieu']; ?>">
                    Consulter le dieu
                </button>
            </div>
            <br>
        </div><br>


        <!-- The Modal -->
        <div class="modal" id="<?= $value['NomDieu']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $value['NomDieu']; ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <H6 class="font-weight-bold">Forme : </H6>
                        <?= $value['Forme']; ?>
                    </div>
                    <div class="modal-body">
                        <H6 class="font-weight-bold">Représentation : </H6>
                        <?= $value['Représentation']; ?>
                    </div>
                    <div class="modal-body">
                        <H6 class="font-weight-bold">Fonction : </H6>
                        <?= $value['Fonction']; ?>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="dieu/<?= $value['NomDieu']; ?>/update">
                            <button type="button" class="btn btn-primary">Modifier AVEC LA METHODE REST</button>
                        </a>
                        <a href="dieu/<?= $value['NomDieu']; ?>/supprimer">
                            <button type="button" class="btn btn-dark" data-toggle="modal">Supprimer
                            </button>
                        </a>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>


        <!-- The Modal -->
        <div class="modal" id="modif<?= $value['NomDieu']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modification</h4>
                        <form action="<?= BASE_URL ?>/dieu" method="POST">
                            <div class="form-group">
                                <label for="forme">Forme:</label>
                                <input type="text" class="form-control" id="forme" name="forme"
                                       value="<?= $value['Forme']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="representation">Représentation:</label>
                                <input type="text" class="form-control" id="representation" name="representation"
                                       value="<?= $value['Représentation']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="fonction">Fonction:</label>
                                <input type="text" class="form-control" id="fonction" name="fonction"
                                       value="<?= $value['Fonction']; ?>">
                            </div>

                            <input type="hidden" class="form-control" id="NomDieu" name="NomDieu"
                                   value="<?= $value['NomDieu']; ?>">
                            <button type="submit" name="submit" class="btn btn-primary">Valider</button>
                        </form>
                    </div>


                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>


                </div>
            </div>
        </div>


        <!-- The Modal -->
        <div class="modal" id="add">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter Dieu</h4>
                        <form action="<?= BASE_URL ?>/dieu" method="POST">
                            <div class="form-group">
                                <label for="forme">Nom Dieu:</label>
                                <input type="text" class="form-control" id="forme" name="nomdieu">
                            </div>
                            <div class="form-group">
                                <label for="forme">Forme:</label>
                                <input type="text" class="form-control" id="forme" name="forme">
                            </div>
                            <div class="form-group">
                                <label for="representation">Représentation:</label>
                                <input type="text" class="form-control" id="representation" name="representation">
                            </div>
                            <div class="form-group">
                                <label for="fonction">Fonction:</label>
                                <input type="text" class="form-control" id="fonction" name="fonction">
                            </div>

                            <button type="submit" name="submitAdd" class="btn btn-primary">Valider</button>
                        </form>
                    </div>


                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>


                </div>
            </div>
        </div>


        <!-- The Modal -->
        <div class="modal" id="del<?= $value['NomDieu']; ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Suppression</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Etes-vous sur de vouloir supprimer <?= $value['NomDieu']; ?> et ses informations ?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form action="<?= BASE_URL ?>/dieu" method="POST">
                            <input type="hidden" class="form-control" id="NomDieuDel" name="NomDieuDel"
                                   value="<?= $value['NomDieu']; ?>">
                            <button type="submit" name="submitDel" class="btn btn-dark">Supprimer
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>
