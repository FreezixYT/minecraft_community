<?php

$prenom = $nom = $email = $age = $mdp = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $mdp = htmlspecialchars($_POST['mdp']);

    $data = [
        "prenom" => $prenom,
        "nom" => $nom,
        "email" => $email,
        $mdp = $_POST['mdp'],
        $mdp2 = $_POST['mdp2']
    
    ];

    if ($mdp !== $mdp2) {
        echo "<p>Erreur : Les mots de passe ne correspondent pas.</p>";
        exit;
    }

    $jsonFile = './data/compte.json';
    $existingData = [];
    if (file_exists($jsonFile)) 
    {
        $existingData = json_decode(file_get_contents($jsonFile), true);
    }

    $existingData[] = $data;

    file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));
}

?>
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
        <form action="form.php" method="post">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($prenom) ?>" required>
        <br>

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom) ?>" required>
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" required>
        <br>

        <label for="age">Âge: <span id="ageValue"><?= htmlspecialchars($age) ?></span></label>
        <input type="number" name="age" value="<?= $age ?>">
        <br>
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" required>
        <br>
        <label for="mdp">Confirmation Mot de passe</label>
        <input type="password" id="mdp2" name="mdp2" required>
        <br>

        <input type="submit" value="Crée un compte">
    </form>
    </main>
    <?php include 'design/footer.html'; ?>
</body>

</html>