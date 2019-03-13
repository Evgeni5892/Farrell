<?php
         
         function articles_all() {
         	$art1 ["$id" => 1, "title" => "Title1", "date" => "2019-03-14", "content" => "Content1"];
         	$art2 ["$id" => 2, "title" => "Title2", "date" => "2019-03-14", "content" => "Content2"];
         	$art3 ["$id" => 3, "title" => "Title3", "date" => "2019-03-14", "content" => "Content3"];
         	$art4 ["$id" => 4, "title" => "Title4", "date" => "2019-03-14", "content" => "Content4"];

         	$arr[0] = $art1;
         	$arr[1] = $art2;
         	$arr[2] = $art3;
         	$arr[3] = $art4;

         	return $arr;

         }

 function articles_get($id) {
         	return["$id" => 1, "title" => "Заголовок", "date" => "2019-03-14", "content" => "Статья"];
         }

          function articles_new($title, $date, $content) {
         	
         }

          function articles_edit($id, $title, $date, $content ) {
         	
         }

          function articles_delete($id) {
         	
         }


?>