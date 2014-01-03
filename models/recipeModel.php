<?php 

class recipeModel {
	
	//READ
	
	//CREATE
	function addRecipe($title, $description, $category, $ingredients, $directions) {
		$db = new PDO("mysql:host=localhost; dbname=myCookbook", "root", "root");
		
		$query = "insert into recipes(title, description, category, ingredients, directions)
				  values(:title, :description, :category, :ingredients, :directions)";
		
		$st = $db->prepare($query);
		$st->bindParam(":title", $title);
		$st->bindParam(":description", $description);
		$st->bindParam(":category", $category);
		$st->bindParam(":ingredients", $ingredients);
		$st->bindParam(":directions", $directions);
		
		$st->execute();
		
	}//end addRecipe
	
	//UPDATE
	
	//DELETE
	
}//end recipeModel

?>