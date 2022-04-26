<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php

        if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
            // L'email est ok
            echo $_GET['email'];
        } else {
            // Email non reconnu
            echo "Erreur";
        }

        if (
            !empty($_GET['pseudo'])
            && !empty($_GET['pass'])
            && !empty($_GET['confirm_pass'])
            && !empty($_GET['email'])
            && $_GET['pass'] === $_GET['confirm_pass']
        ) {
            // On vérifie si les mots de passe correspondent.
            echo "<h2>Les mots de passe sont ok.</h2>";
            echo "<p>Pseudo : " . htmlspecialchars($_GET['pseudo']);
            echo "<p>Pass : " . htmlspecialchars($_GET['pass']);
            echo "<p>Confirm : " . htmlspecialchars($_GET['confirm_pass']);
            echo "<p>Email : " . htmlspecialchars($_GET['email']);
        } else {
            echo "<h2>Erreur au niveau de la saisie</h2>";
        }
        ?>
    </div>
</body>

</html>