<?php
require_once('connect.php');

if(isset($_POST)){
    if(isset($_POST['id']) 
        && isset($_POST['type']) && !empty($_POST['type'])){
        $id = strip_tags($_GET['id']);
        $type = strip_tags($_POST['type']);
        

        $sql = "UPDATE `TypeCategorie` SET `libCategorie`=:type WHERE `idCategorie`=:id;";

        $query = $db->prepare($sql);

        $query->bindValue(':type', $type, PDO::PARAM_STR);
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        $query->execute();

        header('Location: index.php');
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM `TypeCategorie` WHERE `idCategorie`=:id;";

    $query = $db->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
}

require_once('close.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Categories</title>

</head>
<body>
    <h1>Modifier une categorie</h1>
    <form method="post">
        <p>
            <label for="type">Categorie:</label>
            <input type="text" name="type" id="type" value="<?= $result['type'] ?>">
        </p>
        <p>
            <button>Enregistrer</button>
        </p>

        <input type="hidden" name="id" value="<?= $result['id'] ?>">

    </form>
</body>
</html>