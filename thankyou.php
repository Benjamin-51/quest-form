<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $listErrors = [];
    
        $userName = trim($_POST["user_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$userName)) {
            $listErrors[] = "Pas de caractères spéciaux dans le champ prénom.";
            }
        else if ($userName == ""){
            $listErrors[] = "Vous n'avez pas entré de prénom.";
        }


        $userLastName = $_POST["user_lastname"];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$userLastName)) {
            $listErrors[] = "Pas de caractères spéciaux dans le champ nom.";
            }
        else if ($userLastName == ""){
            $listErrors[] = "Vous n'avez pas entré de nom.";
        }

        $userPhone = trim($_POST["user_phone"]);
        if (!preg_match("/^[0-9]{10}$/",$userPhone)) {
            $listErrors[] = "Votre numéro de téléphone n'est pas valide.";
            }


        $userEmail = $_POST["user_email"];
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $listErrors [] = "Votre adresse mail n'est pas valide.";
        }


        $userMeal = trim($_POST["user_meal"]);
        if ($userMeal == ""){
            $listErrors[] = "Vous n'avez pas entré de sujet.";
        }

        $userMessage = trim($_POST["user_message"]);
        if (strlen($userMessage) < 10){
            $listErrors[] = "Vous n'avez pas entré de commentaire.";
        }
        





        if (empty($listErrors)){
            echo "Merci " . htmlentities($userName) . " " . htmlentities($userLastName) . " de nous avoir contacté à propos de “" . htmlentities($userMeal) . "”.</br>" .
            "Un de nos conseiller vous contactera soit à l’adresse " . htmlentities($userEmail) . " ou par téléphone au " . htmlentities($userPhone) . " dans les plus brefs délais pour traiter votre demande : </br>" .
            htmlentities($userMessage) . "</br></br>";}
        else{
            foreach($listErrors as $error){
                echo "<p>$error</p>";
            }
        }
    ?>
</body>
</html>
