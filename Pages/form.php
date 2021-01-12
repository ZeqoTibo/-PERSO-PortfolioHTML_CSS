<?php
if (isset($_POST['Email'])) {

    $email_to = "thibaultderouin5@gmail.com";
    $email_subject = "Me contacter site web perso";

    function problem($error)
    {
        echo '<SCRIPT language="Javascript">alert(\''.$error.'\');</SCRIPT>';

        // echo "Nous sommes vraiment désolés, mais une ou plusieurs erreurs ont été relevées dans le formulaire que vous avez envoyé.";
        //echo "<br>Ces erreurs apparaissent ci-dessous.<br><br>";
        //echo $error ;
        //echo "<br><br>Veuillez revenir en arrière et corriger ces erreurs.<br><br>";


        die();
    }


    if (!isset($_POST['Name']) || !isset($_POST['Email'])|| !isset($_POST['Prenom']) || !isset($_POST['Message'])) {
        problem('Nous sommes désolés, mais il semble qu il y ait un problème avec le formulaire que vous avez soumis');
    }


    $name = $_POST['Name']; // required
    $prenom = $_POST['Prenom']; //required
    $entreprise =$_POST['Entreprise'];
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'L adresse électronique que vous avez saisie ne semble pas être valide.\n';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Le nom que vous avez saisie ne semble pas être valide.\n';
    }

    if (!preg_match($string_exp,$prenom)){
        $error_message .= 'Le prénom que vous avez saisie ne semble pas être valide.\n';
    }

    if (strlen($entreprise)>0){
        if (!preg_match($string_exp,$entreprise)){
            $error_message .= 'L entreprise que vous avez saisie ne semble pas être valide.\n';
        }
    }
    if (strlen($message) < 2) {
        $error_message .= 'Le message que vous avez saisie ne semble pas être valide.\n';
    }

    if (strlen($error_message) > 0) {
        problem($error_message);
    }

    $email_message = "Information :\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Nom: " . clean_string($name) . "\n";
    $email_message .= "Prenom: " . clean_string($prenom) . "\n";

    if (strlen($entreprise)>0){
        $email_message .= "Entreprise: " . clean_string($entreprise) . "\n";
    }

    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    ?>
    <script>
        alert("Merci d'avoir repondu au formulaire, à bientôt");
    </script>

    <?php


}
?>