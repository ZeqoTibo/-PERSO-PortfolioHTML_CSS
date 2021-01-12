<!doctype html>
<html lang="fr">
<?php include("../PHPRacour/head.php") ?>
<title>Mon CV - Thibault DEROUIN</title>
<link rel="stylesheet" href="../CSS-JS/StyleCv.css">
<body>

<div class="container">

    <?php include("../PHPRacour/entete.php") ?>

    <div class="item nav_topPDF">
        <ul id="nav">
            <li><a class="like" href="../Pages/Profil.php">Mon profil</a></li>
            <li><a class="like" href="../Pages/MesProjet.php">Mes projets</a></li>
            <li><a class="like" href="../Pages/cv.php">Mon CV</a></li>
            <li><a class="like" href="../Pages/Contacter.php">Me contacter</a></li>
        </ul>
    </div>


    <div class="itempdf corp">
        <iframe class="pdf" src="../Images/thibault.pdf" width="99.5%" height="1200"></iframe>
    </div>

    <?php include("../PHPRacour/footer.php") ?>

</div>

</body>
