<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog2023', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
session_start();
if (isset($_POST) && isset($_POST['titre']))
{

$query = $dbh->prepare('INSERT INTO `articles`(`title`, `content`, `published_at`, `user_id`) VALUES (?,?,?,?);');
$query->execute([$_POST['titre'],$_POST['content'],date('Y-m-d H:i:s'), $_SESSION['user-id']]);

header('location: ../pages/accueil_blog.php');
}

?>