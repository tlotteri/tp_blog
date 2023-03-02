<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog2023', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$query = $dbh->prepare('SELECT id, email, password FROM users WHERE email = ?');
$query->execute([$_POST['email']]);

$user = $query->fetch();

if ($user) {
    if (password_verify($_POST['password'], $user['password'])) {
        session_start();
        $_SESSION['user-id'] = $user['id'];
        $_SESSION['is_connected'] = true;

        unset($_SESSION['error-connection']);

        header('location: ../pages/accueil_blog.php');
    } else {
        session_start();
        $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

        header('location: ../pages/connexion.php');
    }
} else {
    session_start();
    $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

    header('location: ../pages/connexion.php');
}