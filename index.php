    
<!-- après password retirer pour mise en prod , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION -->
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=blogphp;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} 
catch (Exception $e)
{
        exit('Erreur : ' . $e->getMessage());
}
?>

	<h1>Liste des derniers articles</h1>

<?php

$req = $bdd->query('SELECT * FROM news ORDER BY id_news DESC');
while($data = $req->fetch()) {
	?>
	Post n° <?php echo ($data['id_news']); ?> par <?php echo ($data['news_autor']); ?> publié le <?php echo ($data['news_date']); ?><br><br>
	<?php echo nl2br (htmlspecialchars($data['news_title'])); ?> <br> <br>
	<?php echo nl2br (htmlspecialchars($data['news_content'])); ?> <br> <br>
	<hr>
<?php
}
?>

