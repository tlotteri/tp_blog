<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog2023', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$query = $dbh->prepare('SELECT * FROM articles INNER JOIN users ON articles.user_id = users.id');
$query->execute();

while ($row = $query->fetch()):
 ?> 
<div class="unic_article">
    <div class="title">
        <?php echo $row['title']?> 
    </div>
    <div class="content">
        <?php echo $row['content']?> 
    </div>
    <div class="date_publication"> 
        <?php echo $row['published_at']?>
    </div>
    <div class="pseudo">
        <?php echo $row['pseudo']?>
    </div>
</div>

<?php endwhile; ?>  

