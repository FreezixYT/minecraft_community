<?php
session_start();
$_SESSION["pseudo"] = "freezix-test";
$titre = "";
$contenu = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/assets.css">
    <link rel="stylesheet" href="css/compte.css">
</head>

<body>
    <?php include 'design/header.html'; ?>
    <main>
        <h3>Crée un compte</h3>
        <form>
            <label>Email</label>
            <input type="email" name="email">
            <br>
            <br>
            <label>Mot de pass</label>
            <input type="password" name="mdp">
            <input type="submit" value="Se Connecter">

        </form>
    </main>
    <?php include 'design/footer.html'; ?>
</body>

</html>