<!doctype html>
<html lang="fr">
<?php include("../PHPRacour/head.php") ?>
<title>Mes differents projets effectués ~ Thibault DEROUIN</title>
<link rel="stylesheet" href="../CSS-JS/StyleProjet.css">
<body>

<div class="container">
    <?php include("../PHPRacour/entete.php") ?>

    <div class="item nav_top">
        <ul id="nav">
            <li><a class="like" href="../Pages/Profil.php">Mon profil</a></li>
            <li><a class="like" href="../Pages/MesProjet.php">Mes projets</a></li>
            <li><a class="like" href="../Pages/cv.php">Mon CV</a></li>
            <li><a class="like" href="../Pages/Contacter.php">Me contacter</a></li>
        </ul>
    </div>
    <div class="item corp">

        <div class="sousContainerGH">
            <div class="texte">
                <h4>Projet n°1 : Site internet sur le handicap dans l'informatique</h4>
            </div>
            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="../Images/P1Site.png" style="width:100%;">
                </div>
                <div class="mySlides">
                    <img src="../Images/outilsSite.PNG" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>


        <div class="sousContainerDH">
            <div class="texte">
                <h4>Projet n°2 : Logiciel d'aide pour la compréhension orale d'une langue étrangère</h4>
            </div>
            <div class="slideshow-container2">
                <div class="mySlides2">
                    <img src="../Images/EnseLogiciel.PNG" style="width:100%;">
                </div>

                <div class="mySlides2">
                    <img src="../Images/EtuLogiciel.png" style="width:100%">
                </div>

                <div class="mySlides2">
                    <img src="../Images/EtuTestFaux.PNG" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides2(1)">&#10095;</a>
            </div>
        </div>

        <div class="sousContainerB">
            <div class="texte">
                <h4>Projet n°3 : Logiciel de simulation de pandémie</h4>
            </div>
            <div class="slideshow-container3">
                <div class="mySlides3">
                    <img src="../Images/AccueilSimulation.png" style="width:100%;">
                </div>

                <div class="mySlides3">
                    <img src="../Images/DiagDemo.PNG" style="width:100%">
                </div>

                <div class="mySlides3">
                    <img src="../Images/graphSimulation.PNG" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides3(1)">&#10095;</a>
            </div>
        </div>


    </div>
    <?php include("../PHPRacour/footer.php") ?>
</div>
<script type="text/javascript" src="../CSS-JS/Projet.js"></script>
</body>
</html>
