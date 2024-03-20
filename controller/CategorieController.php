<?php 

// ^^On remarquera ici l'utilisation du "use" pour accéder à la classe Connect située dans le namespace "Model"

namespace Controller;
use Model\Connect;

class CategorieController {
  // ^^--------------- LISTER LES ACTEURS ---------------
  public function listCategorie(){

    // ^^On se connecte
    $pdo= Connect::seConnecter();

    // ^^On exécute la requête de notre choix
    $requete = $pdo -> query("SELECT
    nom_genreCine
    FROM genrecine;
    ");

    // ^^On relie par un "require" la vue qui nous intéresse
    require "view/categorie/listCategories.php";
  }

  //  ^^ ------------- DETAILS CATEGORIES --------------

  public function detailCategorie($id){
    
    // ^^On se connecte
    $pdo= Connect::seConnecter();

    // ^^On exécute la requête de notre choix
    $requete = $pdo -> prepare("SELECT * FROM genreCine WHERE id_genreCine = :id");
    $requete -> execute(["id"=> $id]);
    

    $requeteCategorie = $pdo -> prepare ("SELECT
    nom_genreCine
    FROM genreCine;");
    $requeteCategorie -> execute(["id" => $id]);

    // ^^On relie par un "require" la vue qui nous intéresse
    require "view/categorie/detailCategorie.php";

  }
}
?>