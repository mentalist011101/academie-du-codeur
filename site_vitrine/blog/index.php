<!DOCTYPE html>
<html lang="en,fr">
<head>
    <title>blog de l'académie du codeur</title><?php $titre="blog de l'académie du codeur"; ?>
    <?php include("../templates/src/lien_head.html") ?>
</head>
<body>
    <?php
        include("../templates/header!h.php")        
    ?>
    <div id="all_content"> 
        <div class="floue">
            <h1 id="title">blog</h1>
        </div>
    </div>
    
    <div style="height:2000px;background: white;color: black">
        <?php  
            for ($i=0; $i < 100; $i++) { 
                print($titre."<br>") ;  
            }
        ?>
        </div>
</body>
</html>