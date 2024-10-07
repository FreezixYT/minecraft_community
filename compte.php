<?php
session_start();
$name = "freezix";
$_SESSION["user"] = $name;

$data = file_get_contents("./data/compte.json");
$data1 = json_decode($data, true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiki</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/assets.css">
</head>

<body>
    <?php include 'design/header.html'; ?>
    <main>
        <main>
            <?php
                if (!empty($_SESSION["user"])) {
                    $pseudo = null;
                    foreach ($data1 as $user) {
                        if ($user["pseudo"] == $_SESSION["user"]) {
                            $pseudo = $user["pseudo"];
                            break;
                        }
                    }

                    if ($pseudo) {
                        echo "Vous êtes " . $pseudo;
                    } else {
                        echo "Utilisateur non trouvé.";
                    }
                } else {
                    echo "Vous n'êtes pas connecté.";
                }
            ?>
        </main>
    </main>
    <?php include 'design/footer.html'; ?>
</body>

</html>
