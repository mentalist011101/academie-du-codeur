<!DOCTYPE html>
<html lang="en,fr">
<head>
    <meta charset="UTF-8">
    <title>services de l'académie du codeur</title><?php $titre="services de l'académie du codeur"; ?>
    <?php include("../templates/src/lien_head.html") ?>
</head>
<body>
    <?php
        include("../templates/header!h.php");      
    ?>
    <div id="all_content"> 
        <div class="floue">
            <h1 id="title">services</h1>
        </div>
    </div>


    <div>
sd
    </div>

    <div style="height:2000px;background: white;color: black">
        <?php  
            for ($i=0; $i < 100; $i++) { 
                print($titre."<br>") ;  
            }
        ?>
    </div>
    <?php include("../footer.html") ?>

</body>
</html>