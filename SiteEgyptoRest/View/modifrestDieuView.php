<?php
foreach ($afficheleDieu as $k => $value) {
    $nom_photo = $value['NomDieu'];
    ?>

        <h4 class="modal-title">Modification</h4>
        <form action="" method="POST">
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
    <?php
}
?>