<?php 

class recipeModel {
	
/*	=	=	=	=	=	=	=	=	= 	=	=	=	=	=	=	=	=	=
							Read
=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	*/
	
	function getRecipes() {
		$db = new PDO("mysql:host=localhost; dbname=myCookbook", "root", "root");
		
		$query = "select id, title, category
				  from recipes";
		
		$st = $db->prepare($query);
		
		$st->execute();
		
		$result = $st->fetchAll();
		
		return $result;
		
	}//end getRecipes
	
	function getRecipe($id) {
		$db = new PDO("mysql:host=localhost; dbname=myCookbook", "root", "root");
		
		$query = 'select id, title, description, ingredients, directions
				  from recipes';
				  
		$st = $db->prepare($query);
		
		$st->execute();
		
		$result = $st->fetchAll();
		
		return $result;	
	}
	
	
/*	=	=	=	=	=	=	=	=	= 	=	=	=	=	=	=	=	=	=
							Create
=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	*/
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

/*	=	=	=	=	=	=	=	=	= 	=	=	=	=	=	=	=	=	=
							Update
=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	*/
	
/*	=	=	=	=	=	=	=	=	= 	=	=	=	=	=	=	=	=	=
							Delete
=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	*/
	
}//end recipeModel

?>