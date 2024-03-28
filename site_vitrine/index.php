<!DOCTYPE html>
<html lang="fr,en"><?php $titre="home academie du codeur"; ?>
<head>
    <meta charset="UTF-8"/>
    <title>home academie du codeur</title>
    <?php include("./templates/src/lien_head_h.html") ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    
    <?php include("./templates/header.php") ?>
    <?php #include("./templates/header.php") ?>
    <div id="marge">
        <div id="all_content"> 
            <div class="floue">
                <h1 id="title">académie du codeur</h1>
            </div>
        </div>
        <?php include("./templates/articles/home/home.html") ?>
        <?php #include("./templates/articles/home/services.html") ?>
        <?php include("./templates/articles/home/formations.html") ?>
    </div>
    <?php include("./footer.html") ?>
</body>
</html>
