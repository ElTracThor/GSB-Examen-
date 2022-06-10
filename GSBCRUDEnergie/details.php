<?php
session_start();

// On inclut la connexion à la base
require_once('connect.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    // On écrit notre requête
    $sql = 'SELECT * FROM `TypeCategorie` WHERE `idCategorie`=:id';

    // On prépare la requête
    $query = $db->prepare($sql);

    // On attache les valeurs
    $query->bindValue(':id', $id, PDO::PARAM_INT);

    // On exécute la requête
    $query->execute();

    // On stocke le résultat dans un tableau associatif
    $type = $query->fetch();

    if(!$type){
        header('Location: index.php');
    }
}else{
    header('Location: index.php');
}

require_once('close.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des types</title>

</head>
<body>
    <h1>Détails du type <?= $type['type'] ?></h1>
    <p>ID : <?= $type['idCategorie'] ?></p>
    <p>Type de Categorie : <?= $type['libCategorie'] ?></p>
    <p><a href="edit.php?id=<?= $type['idCategorie'] ?>">Modifier</a>  <a href="delete.php?id=<?= $type['idCategorie'] ?>">Supprimer</a>
    <a href="index.php">Retour</a> </p>
</body>
</html>
