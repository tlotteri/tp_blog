<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/publication_article.css">
    <link rel="stylesheet" href="reset.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap');</style>
    <title>Publication de l'article</title>
</head>
<body>
    <header class="hdp">
            <a href="accueil_blog.php">Retour à la page d'accueil</a>
            <a href="../authentification/deconnexion.php">Se déconnecter</a>
            <a href="admin.php">Page d'administrateur</a>
    </header>
    <div id="article">
        <h1>Publier un article</h1>
        <p>Vous pouvez rédiger votre article ici. Merci de respecter les règles de bonne conduite. 
            Un modérateur pourra être amené à supprimer votre contenu si ce dernier est jugé inaproprié.</p>
        <form action="../authentification/publication_article.php" method="post" id="form_article"> 
        <div id="title_content">  
            <label>Titre de votre article </label>
            <input type="text" name="titre" required autocomplete="off"/>
        </div>
        <div id="text_area">
            <label>Contenu de l'article</label>
            <textarea type="text" name="content" required placeholder="Veuillez écrire votre article" autocomplete="off" 
                id="input_content" spellcheck="true">
            </textarea>
        </div>
            <input type="submit" id="publish_btn" value="Publier"/>
        </form>

    </div>

</body>
</html>