<?php
session_start();
$_SESSION["pseudo"] = "freezix-test";
$titre = "";
$contenu = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = htmlspecialchars($_POST["titre"]);
    $contenu = htmlspecialchars($_POST["contenu"]);

    $creator = $_SESSION["pseudo"];
    $dt = time();
    $date = date("d/m/Y H:i:s", $dt);


    $data = array(
        "date" => $date,
        "creator" => $creator,
        "titre" => $titre,
        "article" => $contenu 
    );

    $filename = "data/forum.json";

    if (file_exists($filename)) {
        $jsonData = file_get_contents($filename);
        $dataArray = json_decode($jsonData, true);

        if (json_last_error() === JSON_ERROR_NONE) {
            $dataArray[] = $data; 
        } else {
            echo "Erreur de décodage JSON.";
            exit;
        }
    } else {
       
        $dataArray = array();
        $dataArray[] = $data; 
    }


    $newJsonData = json_encode($dataArray, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);


    if (file_put_contents($filename, $newJsonData) !== false) {
        echo "Données ajoutées avec succès.";
    } else {
        echo "Erreur lors de l'écriture des données.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/assets.css">
    <link rel="stylesheet" href="css/formulair.css">
</head>

<body>
    <?php include 'design/header.html'; ?>
    <main>
        <h1>Crée un sujet</h1>
        <form method="post" action="">
            <label>titre</label>
            <input type="text" name="titre" required>
            <label>contenu</label>
            <textarea class="contenu" name="contenu" require></textarea>
            <input type="submit" value="Envoyer">
        </form>
    </main>

    <?php include 'design/footer.html'; ?>
</body>

</html>
