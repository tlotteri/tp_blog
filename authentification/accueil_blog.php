<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog2023', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$query = $dbh->prepare('SELECT * FROM articles INNER JOIN users ON articles.user_id = users.id');
$query->execute();

while ($row = $query->fetch())
{
    echo $row['title']."<br />".$row['content']."<br />".$row['published_at']."<br />".$row['pseudo']."<br/><br />";
}

?>