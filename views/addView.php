<h1>Add Recipe</h1>
<br />
<br />
<br />
<br />
<form name="addRecipe" method="post">
	
	<div>
		<label for="title">Recipe Title:</label>
		<input type="text" name="title" id="title" />
	</div>
	
	<div>
		<label for="description">Description:</label>
		<textarea name="description" id="description" rows="5" cols="40"></textarea
	</div>
	
	<div>
		<label for="category">Category</label>
		<select name="category" id="category">
			<option>Breakfast</option>
		    <option>Lunch</option>
		    <option>Beverages</option>
		    <option>Appetizers</option>
		    <option>Soups</option>
		    <option>Salads</option>
		   	<option>Beef</option>
		    <option>Poultry</option>
		    <option>Pork</option>
		    <option>Seafood</option>
		    <option>Vegetarian</option>
		    <option>Side dishes</option>
		    <option>Desserts</option>
		    <option>Canning/Freezing</option>
		    <option>Breads</option>
		    <option>Holidays</option>
		</select>
	</div>
	
	<div id="inputGroup">
		<input type="submit" id="addInput" class="btn" value="Add Input" />
		<input type="submit" id="deleteInput" class="btn" value="Delete Input" />
		
		<label for="ingredient1">Ingredient 1:</label>
		<input type="text" name="ingredient1" id="ingredient1" />
		<br />
		
		<label for="ingredient2">Ingredient 2:</label>
		<input type="text" name="ingredient2" id="ingredient2" />
		<br />
		
	</div><!-- inputGroup -->
	
	<div>
		<label for="directions">Directions:</label>
		<textarea id="directions" name="directions" rows="10" cols="50"></textarea>
	</div>
	
	<input type="submit" name="addSub" id="addSub" class="btn" value="Add Recipe" />
	
</form>


<ul>
<li>foo</li>
<li>bar</li>
</ul>
