<?php
   require_once ('datebase.php');
   require_once ('models/articles.php');

  $article = articles_get($_GET['id']);
  include("views/article.php");

?> 