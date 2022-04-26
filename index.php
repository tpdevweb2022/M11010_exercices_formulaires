<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création de compte</title>
    <style>
        div {
            margin: 2rem auto;
            display: flex;
            flex-direction: column;
            max-width: 480px;
        }
    </style>
</head>

<body>

    <form action="engine/traitement.php" method="GET">
        <!-- IMPORTANT -->
        <div>
            <label for="">Pseudo</label>
            <input type="text" name="pseudo" required id="pseudo">
        </div>
        <div>
            <label for="">Mot de passe</label>
            <input type="password" name="pass" required>
        </div>
        <div>
            <label for="">Confirmation mot de passe</label>
            <input type="password" name="confirm_pass" required><!-- IMPORTANT -->
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <input type="submit" value="Inscription" name="register_btn"><!-- IMPORTANT -->
        </div>
    </form>
</body>

</html>