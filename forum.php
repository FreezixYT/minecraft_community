<?php
    $data = file_get_contents("./data/forum.json");
    $data = json_decode($data, true);
    echo "<pre>";
    $titre = $data['titre'];
    echo $titre;
    echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/assets.css">
</head>
<body>
    <style>
        *
        {
            color: white;
        }
    </style>
    <?php include 'design/header.html'; ?>
    <main>
        <h1>Forum</h1>
        <?php
            foreach ($data as $article)
            {
                if(isset())
            }
        ?>
    </main>
    <?php include 'design/footer.html'; ?>
</body>

</html>