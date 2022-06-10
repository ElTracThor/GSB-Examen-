<?php

// On inclut la connexion à la base
require_once('connect.php');

// On écrit notre requête
$sql = 'SELECT * FROM `TypeCategorie`';

// On prépare la requête
$query = $db->prepare($sql);

// On exécute la requête
$query->execute();

// On stocke le résultat dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des types d'énergie</title>
</head>
<body>

    <h1>Liste des types de Catégorie</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Catégorie</th>
        </thead>
        <tbody>
        <?php
            foreach($result as $type){
        ?>
                <tr>
                    <td><?= $type['idCategorie'] ?></td>
                    <td><?= $type['libCategorie'] ?></td>
                    <td><a href="details.php?id=<?= $type['idCategorie'] ?>">Voir</a>  <a href="edit.php?id=<?= $type['idCategorie'] ?>">Modifier</a>  <a href="delete.php?id=<?= $type['idCategorie'] ?>">Supprimer</a></td>
                </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
    <a href="add.php">Ajouter</a>
</body>
</html>
