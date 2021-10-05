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
    <form action="thankyou.php" method="post">

        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_lastname">
        </div>

        <div>
            <label  for="prenom">Prénom :</label>
            <input  type="text"  id="prenom"  name="user_name">
        </div>
        
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        
        <div>
            <label  for="telephone">Numéro de téléphone :</label>
            <input  type="text"  id="telephone"  name="user_phone">
        </div>

        <label for="meal">Sujet de votre demande:</label>
        <select id="meal" name="user_meal">
            <option value="Petit-déjeuner">Petit-déjeuner</option>
            <option value="Déjeuner">Déjeuner</option>
            <option value="Dîner">Dîner</option>
            <option value="Soupé">Soupé</option>
        </select> 

        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>

        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>

    </form>

</body>
</html>