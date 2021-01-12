<!doctype html>
<html lang="fr">
<?php include("../PHPRacour/head.php") ?>
<title>Formulaire pour me contacter ~ Thibault DEROUIN</title>
<link rel="stylesheet" href="../CSS-JS/StyleContact.css">
<body>

<div class="containerContacter">


    <?php include("../PHPRacour/entete.php") ?>

    <div class="item nav_top">
        <ul id="nav">
            <li><a class="like" href="../Pages/Profil.php">Mon profil</a></li>
            <li><a class="like" href="../Pages/MesProjet.php">Mes projets</a></li>
            <li><a class="like" href="../Pages/cv.php">Mon CV</a></li>
            <li><a class="like" href="../Pages/Contacter.php">Me contacter</a></li>
        </ul>
    </div>

    <div class="item formulaire">
        <form method="post" action="Contacter.php">


            <label for="Name"><sup><strong>*</strong></sup>Nom</label>
            <br>
            <input type="text" id="space" name="Name" placeholder="Votre nom" required>
            <br>

            <label for="Prenom"><sup><strong>*</strong></sup>Prénom</label>
            <br>
            <input type="text" id="space" name="Prenom" placeholder="Votre prénom" required>
            <br>

            <label for="Entreprise">Entreprise</label>
            <br>
            <input type="text" id="space" name="Entreprise" placeholder="Nom de votre entreprise (facultatif)" >
            <br>

            <label for="Email"><sup><strong>*</strong></sup>Email</label>
            <br>
            <input type="email" id="space" name="Email" placeholder="Votre adresse mail" required>
            <br>

            <label for="Message"><sup><strong>*</strong></sup>Message</label>
            <br>
            <textarea name="Message" id="space" class="textArea" maxlength="3000" placeholder="Votre message" required></textarea>
            <br>

            <button type="submit">
                Envoyer
            </button>
            <br>

            <a><sup>*</sup>Champs obligatoires</a>
        </form>
    </div>

    <?php include("../PHPRacour/footer.php") ?>
</div>

<?php include("form.php") ?>

</body>

