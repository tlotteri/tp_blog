<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/accueil_blog.css">
    <title>Bienvenue</title>
</head>
<body>
    <?php
     session_start();
    if ($_SESSION['is_connected'] == false) { 
        header('Location:/index.php');
    }
    ?>
    <header class="hdp">
        <a href="../authentification/deconnexion.php">Se déconnecter</a>
        <a href="admin.php">Page d'administrateur</a>
        <a href="publication_article.php">Publier un article</a>
    </header>
    <h1>Bienvenue ! :)</h1>
    <div class="main_articles">
        <div class="articles">
            <h2>Articles</h2>
            <?php require("../authentification/accueil_blog.php");
            ?>
        </div>
    </div>
</body>
</html>
