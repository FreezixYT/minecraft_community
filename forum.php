<?php
$data = file_get_contents("./data/forum.json");
$data1 = json_decode($data, true);
echo "<pre>";
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/assets.css">
</head>

<body>
    <style>
        * {
            color: white;
        }
    </style>
    <?php include 'design/header.html'; ?>
    <main>
        <h1>Forum</h1>
        <div class="zone-artcle">
            <?php
            foreach ($data1 as $article) {
                echo "<div class='article'>";
                echo "<h2>" . $article['titre'] . "</h2>";
                echo "<br>";
                echo $article["date"];
                echo "<br>";
                echo $article["creator"];
                echo "<br>";
                echo $article["article"];
                echo "<br>";
                echo "</div>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
            }
            ?>
        </div>
        <a href="./creation.php" class="more">+</a>
    </main>
    <?php include 'design/footer.html'; ?>
</body>

</html>