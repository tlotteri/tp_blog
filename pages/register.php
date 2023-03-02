<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="../style/register.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');</style>
    <title>S'inscrire</title>
</head>
<body>
    <header class="hdp">
            <a href="javascript:history.back()">Retour à la page précédente</a>
            <a href="admin.php">Page d'administrateur</a>
    </header>
    <form action="../authentification/register.php" method="post" class="main_register">
        <label  for="pseudo">Pseudo</label>
        <input  id="pseudo" type="text" name="pseudo" placeholder="Veuillez choisir un pseudo" required="required" autocomplete="off">
        <label  for="email">Email</label>
        <input  id="email" type="email" name="email" placeholder="Veuillez saisir votre e-mail" required="required" autocomplete="off">
        <label  for="password">Mot de passe</label>
        <input  id="password" type="password" name="password" placeholder="8 caractères minimum" required="required" autocomplete="off" minlength="8" pattern="(?=.*[\W_])(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        <p> Le mot de passe doit contenir au moins 8 caractères dont une lettre en minuscule, unne en majuscule, un chiffre ainsi qu'un caractère spécial</p> 
        <button type="submit" class="register_btn">S'inscrire</button>
    </form> 
</body>
</html>




