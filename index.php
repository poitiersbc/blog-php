<?php 
mysql_connect('localhost', 'root', '');
mysql_selectdb('blogphp');
?>

	<h1>Liste des derniers articles</h1>

<?php
$v1 = mysql_query('SELECT * FROM articles ORDER BY id DESC LIMIT 0,3');
while($info_article = mysql_fetch_array($v1)) {
?>

Article #<?php echo $info_article['id'] ?> <br> auteur <?php echo $info_article['auteur'] ?> <br> 
<br> Titre <?php echo $info_article['titre'] ?>
<br> <?php echo $info_article['contenu'] ?>

<?php
}

 ?>