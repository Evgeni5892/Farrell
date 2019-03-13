<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Название страницы</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container"> 
	<div><h1>Великая Отечественная Война</h1> </div>
<div> 
	<?php foreach($articles as $a): ?>  
	<div class="article">
	<h3>
		<a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a>
	</h3>
	<em>Опубликованно <?=$a['date']?></em>
	<p> <?=$a['content']?></p>
<?php endforeach ?>
</div>

</div>
</div>
<footer> <p>Copyright&copy; 2019</p></footer>
</body>
</html>