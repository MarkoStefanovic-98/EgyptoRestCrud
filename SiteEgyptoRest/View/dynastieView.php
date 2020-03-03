<section id="dieu" class="row tm-section">
    <div class="col-xl-12 col-md-12 col-xs-12">
        <h1 class="text-center">Dynastie Egyptienne</h1><br>
        <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#add">
            Ajouter une dynastie
        </button>
    </div>
    <?php

    foreach ($afficheDynastie as $k => $value) {
        $nom_photo = $value['NomDynastie'];
        ?>
        <div class="col-xl-4 col-md-4 col-xs-12">


            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="./img/photos/<?php echo($nom_photo); ?>.jpg" alt="Card image cap"
                     height="250px" width="30px">
                <div class="card-body">
                    <h5><?= $value['NomDynastie']; ?></h5>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#<?= str_replace(" ", "-", $nom_photo); ?>">
                    Consulter la dynastie
                </button>
            </div>
            <br>
        </div><br>


        <!-- The Modal -->
        <div class="modal" id="<?= str_replace(" ", "-", $nom_photo); ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $value['NomDynastie']; ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <H6 class="font-weight-bold">Début : </H6>
                        <?= $value['DebDynastie']; ?>
                        <H6 class="font-weight-bold">Fin : </H6>
                        <?= $value['FinDynastie']; ?>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form action="" method="post">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modif<?= str_replace(" ", "-", $nom_photo); ?>" data-dismiss="modal">
                                Modifier
                            </button>
                            <button type="button" class="btn btn-dark" data-toggle="modal"
                                    data-target="#del<?= str_replace(" ", "-", $nom_photo); ?>" data-dismiss="modal">
                                Supprimer
                            </button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- The Modal -->
        <div class="modal" id="modif<?= str_replace(" ", "-", $nom_photo); ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modification</h4>
                        <form action="<?= BASE_URL ?>/epoque" method="POST">
                            <div class="form-group">
                                <label for="description">Nom d'époque:</label>
                                <input type="text" class="form-control" id="description" name="NomEpoque"
                                       value="<?= $value['NomEpoque']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="representation">Commentaire:</label>
                                <input type="text" class="form-control" id="situation" name="CommentEp"
                                       value="<?= $value['CommentEp']; ?>">
                            </div>

                            <input type="hidden" class="form-control" id="NomLieu" name="NroEpoque"
                                   value="<?= $value['NroEpoque']; ?>">
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
        <div class="modal" id="del<?= str_replace(" ", "-", $nom_photo); ?>">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Suppression</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Etes-vous sur de vouloir supprimer <?= str_replace(" ", "-", $nom_photo); ?> et ses informations
                        ?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <form action="<?= BASE_URL ?>/epoque" method="POST">
                            <input type="hidden" class="form-control" id="NomLieuDel" name="NroEpoque"
                                   value="<?= $value['NroEpoque']; ?>">
                            <button type="submit" name="submitDel" class="btn btn-dark">Supprimer
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </form>
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
                        <h4 class="modal-title">Ajouter une epoque</h4>
                        <form action="<?= BASE_URL ?>/epoque" method="POST">
                            <div class="form-group">
                                <label for="NomLieu">Nom epoque:</label>
                                <input type="text" class="form-control" id="forme" name="nomepoque">
                            </div>
                            <div class="form-group">
                                <label for="Description">commentaire:</label>
                                <input type="text" class="form-control" id="description" name="commentaire">
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

        <?php

    }
    ?>
</section>
