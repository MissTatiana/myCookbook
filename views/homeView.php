<h1>Recipes:</h1>

<a href="?action=addRecipe"><img id="add" src="../images/plus.png" width="30.5" height="32" /></a>


<?php 



foreach($data as $result) {

	echo '<div id="left">';
		echo '<div id="breakfast" class="category">';
			echo '<h2>Breakfast</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Breakfast') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//breakfast
		
		
		echo '<div id="lunch" class="category">';
			echo '<h2>Lunch</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Lunch') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//lunch
		
		
		echo '<div id="beverages" class="category">';
			echo '<h2>Beverages</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Beverages') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//beverages
		
		
		echo '<div id="appetizers" class="category">';
			echo '<h2>Appetizers</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Appetizers') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//appetizers
		
		
		echo '<div id="soups" class="category">';
			echo '<h2>Soups</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Soups') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//soups
		
		
		echo '<div id="salads" class="category">';
			echo '<h2>Salads</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Salads') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//salads
		
		
		echo '<div id="beef" class="category">';
			echo '<h2>Beef</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Beef') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//beef
		
		
		echo '<div id="poultry" class="category">';
			echo '<h2>Poultry</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Poultry') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//poultry
		
		
		echo '<div id="college" class="category">';
			echo '<h2>College Meals</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'College Meals') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//college
	
	echo '</div>';//left
		
	echo '<div id="right">';
		
		echo '<div id="pork" class="category">';
			echo '<h2>Pork</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Pork') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//pork
		
		
		echo '<div id="seafood" class="category">';
			echo '<h2>Seafood</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Seafood') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//seafood
		
		
		echo '<div id="vegetarian" class="category">';
			echo '<h2>Vegetarian</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Vegetarian') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//vegetarian
		
		
		echo '<div id=side"" class="category">';
			echo '<h2>Side Dish</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Side Dish') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//side
		
		
		echo '<div id="desserts" class="category">';
			echo '<h2>Desserts</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Desserts') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//desserts
		
		
		echo '<div id="canning" class="category">';
			echo '<h2>Canning</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Canning') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//canning
		
		
		echo '<div id="breads" class="category">';
			echo '<h2>Breads</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Breads') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//breads
		
		
		echo '<div id="holidays" class="category">';
			echo '<h2>Holidays</h2>';
			
			for($i = 0, $j = count($result); $i<$j; $i++) {
				$id = $result[$i]['id'];
				$title = $result[$i]['title'];
				$category = $result[$i]['category'];
				
				if($category == 'Holiday') {
					echo '<a class="title" href="?action=recipe&id=' . $id . '">' . $title . '</a><br /><br />';
				}
			}
		echo '</div>';//holidays
		
	echo '</div>';//right	

}//foreach

?>


