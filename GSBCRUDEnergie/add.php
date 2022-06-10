<?php
require_once('connect.php');
$sql = "INSERT INTO `TypeCategorie` (`idCategorie`, `libCategorie`) VALUES (:idCategorie, :libCategorie);";

$query = $db->prepare($sql);

$query->bindValue(':idCategorie', $idenergie, PDO::PARAM_INT);
$query->bindValue(':libCategorie', $libenergie, PDO::PARAM_STR);

$query->execute();
?>
<!DOCTYPE html>
<form method="post">
    <label for="idCategorie">ID</label>
    <input type="number" name="idCategorie" id="idCategorie">
    <label for="libCategorie">Type de Catégorie</label>
    <input type="text" name="libCategorie" id="libCategorie">

    <button>Enregistrer</button>
</form>

<?php

if(isset($_POST)){
    if(isset($_POST['idCategorie']) && !empty($_POST['idCategorie'])
        && isset($_POST['libCategorie']) && !empty($_POST['libCategorie'])){
            $idenergie = strip_tags($_POST['idCategorie']);
            $libenergie = strip_tags($_POST['libCategorie']);
        

            $sql = "INSERT INTO `TypeCategorie` (`idCategorie`, `libCategorie`) VALUES (:idCategorie, :libCategorie);";

            $query = $db->prepare($sql);

            $query->bindValue(':idCategorie', $idenergie, PDO::PARAM_INT);
            $query->bindValue(':libCategorie', $libenergie, PDO::PARAM_STR);

            $query->execute();
            
            header('Location: index.php');
        }  
  

}

require_once('close.php');