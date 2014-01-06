<h1>Recipes:</h1>

<a href="?action=addRecipe"><img id="add" src="../images/plus.png" width="30.5" height="32" /></a>


<?php 



foreach($data as $result) {
		
		
		echo "<div id='left'>";
	
			echo "<div id='breakfast'>";
				echo "<h3>Breakfast</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Breakfast') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
				
			echo "</div>";//breakfast
			
			echo "<div id='lunch'>";
				echo "<h3>Lunch</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Lunch') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
				
			echo "</div>"; //lunch
			
			echo "<div id='beverages'>";
				echo "<h3>Beverages</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Beverages') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//beverages
			
			echo "<div id='appetizers'>";
				echo "<h3>Appetizers</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Appetizers') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//appetizers
			
			echo "<div id='soups''>";
				echo "<h3>Soups</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Soups') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//soups
			
			echo "<div id='salads'>";
				echo "<h3>Salads</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Salads') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//salads
			
			echo "<div id='beef'>";
				echo "<h3>Beef</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Beef') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//beef
			
			echo "<div id='poultry'>";
				echo "<h3>Poultry</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Poultry') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//poultry
			
			
		echo "</div>";// left 
		
		echo "<div id='right'>";
			
			echo "<div id='pork'>";
				echo "<h3>Pork</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Pork') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//pork
			
			echo "<div id='seafood'>";
				echo "<h3>Seafood</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Seafood') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//seafood
			
			echo "<div id='vegetarian'>";
				echo "<h3>Vegetarian</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Vegetarian') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//vegetarian
			
			echo "<div id='sideDishes'>";
				echo "<h3>Side Dishes</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Side Dish') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//sideDishes
			
			echo "<div id='desserts'>";
				echo "<h3>Desserts</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Desserts') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//desserts
			
			echo "<div id='canning'>";
				echo "<h3>Canning/Freezing</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Canning/Freezing') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";					}
			
				}
			echo "</div>";//canning
			
			echo "<div id='breads'>";
				echo "<h3>Breads</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Breads') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//breads
			
			echo "<div id='holiday'>";
				echo "<h3>Holidays</h3>";
				
				for($i = 0, $j = count($result); $i < $j; $i++) {
		
					$id = $result[$i]['id'];
					$title = $result[$i]['title'];
					$category = $result[$i]['category'];
					$description = $result[$i]['description'];
			
					if($category == 'Holidays') {
						echo "<a class='title' href='?action=recipe&id=" . $id . "'>" . $title . "</a><br /><br />";
						echo "<input type='text' id='recipeId' name='recipeId' value='" . $id . "' />";
					}
			
				}
			echo "</div>";//breads
			
		echo "</div>";//right		

}

?>



