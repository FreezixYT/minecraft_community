<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/assets.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'design/header.html';?>
    <main>
        <h1>Minecraft Community</h1>
        <form method="post" action="">
            <input type="text" name="recherche" list="suggestion" placeholder="🔎">
            <datalist id="suggestions">
                <option value="HTML">
                <option value="CSS">
                <option value="JavaScript">
                <option value="React">
                <option value="Vue">
            </datalist>
        </form>
    </main>



    <?php include 'design/footer.html';?>
</body>

</html>