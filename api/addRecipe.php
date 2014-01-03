<?php 

$title = $_POST['title'];
$description = $_POST['description'];
$category = $_POST['category'];
$ingredients = $_POST['ingredients'];
$directions = $_POST['directions'];

//echo $title . $description . $category . $ingredients . $directions;

addRecipe($title, $description, $category, $ingredients, $directions);

function addRecipe($title, $description, $category, $ingredients, $directions) {
	$db = new PDO("mysql:host=localhost; dbname=myCookbook", "root", "root");
	
	$query = "insert into recipes(title, description, category, ingredients, direction)
			  values(:title, :description, :category, :ingredients, :directions)";
	
	$st = $db->prepare($query);
	$st->bindParam(":title", $title);
	$st->bindParam(":description", $description);
	$st->bindParam(":category", $category);
	$st->bindParam(":ingredients", $ingredients);
	$st->bindParam(":directions", $directions);
	
	$st->execute();
	
}

?>