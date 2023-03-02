<?php
// Connexion à MySQL
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog2023', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// hashage du mdp dans la bdd (incontournable)
$passwordHashed = password_hash($_POST['password'], PASSWORD_BCRYPT);

$query = $dbh->prepare('INSERT INTO users (pseudo, email, password, role_id) VALUES (:pseudo, :email, :password, :role_id);');
$query->execute([
    'pseudo' => $_POST['pseudo'],
    'email' => $_POST['email'],
    'password' => $passwordHashed,
    'role_id' => 1
]);

// Redirection
header('location: ../pages/connexion.php');