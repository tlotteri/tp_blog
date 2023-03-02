<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/connexion.css">
    <link rel="stylesheet" href="reset.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');</style>
    <title>Connexion</title>
</head>
<body>
    <header class="hdp">
            <a href="javascript:history.back()">Retour à la page précédente</a>
            <a href="admin.php">Page d'administrateur</a>
    </header>
    <form action="../authentification/connexion.php" method="post" class="form_reg">
        <h1 >Se connecter</h1>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required="required" autocomplete="off">
        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" required="required" autocomplete="off">
        <button class="connexion_btn" type="submit">Se connecter</button>
    </form>
<?php
session_start();
if (isset($_SESSION['error-connection'])) {
    echo $_SESSION['error-connection'];
}

?>
    
</body>
</html>