<?php 
ob_start(); 

?>

<div>
    <div class="form_info">

        <form action="index.php?action=ajoutCasting" enctype="multipart/form-data" method="POST">
            <div class=" ">

                <div class=" ">
                    <label for="film"></label>
                    <select name="film" id="film" required>

                        <option disabled selected> Choix du film </option>
                            <?php foreach($requeteFilm->fetchAll() as $film){ ?>
                            <option value="<?= $film["id_film"] ?>"><?= $film["title_film"]?></option>
                            <?php } ?>
                    </select>
                </div>

                <div class=" ">
                    <label for="role"></label>
                    <select name="role" id="role" required>
                        <option disabled selected> Choix du rôle </option>
                            <?php foreach($requeteRole->fetchAll() as $role){ ?>
                            <option value="<?= $role["id_role"] ?>"><?= $role["nom_role"] ?></option>
                            <?php } ?>
                    </select>
                </div>

                <div class=" ">
                    <label for="acteur"></label>
                    <select name="acteur" id="acteur" required>
                        <option disabled selected> Choix des acteur </option>
                            <?php foreach($requeteActeur->fetchAll() as $acteur){ ?>
                                <option value="<?= $actor["id_acteur"] ?>"><?= $acteur["nom_personne"] . ' ' . $actor["prenom_personne"]?></option>
                            <?php } ?>
                        </select>
                </div>
            </div>

            <div class="btn-submit">
                <input type="submit" name="submitCasting" value="Submit" class="button-casting">
            </div>
        </form>

        <div class="messages_neutral">
            <?php
                if (isset($_SESSION["message"])) {
                    echo "<p>" . $_SESSION["message"] . "</p>";
                    unset($_SESSION["message"]); // Supprimer le message de la session
            }?>
        </div>

    </div>
    
</div>








<?php

$titre = "Ajout Casting Film";
$titre_secondaire = "Ajout Cating Film";
$contenu = ob_get_clean();
require "view/template.php";

?>