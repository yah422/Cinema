<?php ob_start();

$detActe = $requete->fetch();
$detAct = $requete ->fetchAll(); ?>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th> Nom </th>
            <th> Prénom </th>
            <th> Date de Naissance </th>
            <th> Sexe </th>
            <th> Titre Film </th>
            <th> Nom rôle </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requeteActeur ->fetchAll() as $detailAct) {?>
                <tr>
                    <td> <?= $detailAct["nom_personne"]?> </td>
                    <td> <?= $detailAct["prenom_personne"]?> </td>
                    <td> <?= $detailAct["dateNaissance"]?> </td>
                    <td> <?= $detailAct["sexe_personne"]?></td>
                    <td> <?= $detailAct["titre_film"]?> </td>
                    <td> <?= $detailAct["nom_role"]?> </td>
    
                </tr>
        <?php } ?>
    </tbody>
</table>



<?php

$titre = "Détails Acteurs";
$titre_secondaire = "Détails Acteurs";
$contenu = ob_get_clean();
require "view/template.php";

?>