<?php 

//MODELS
include('models/viewModel.php');
$view = new viewModel();
include('models/recipeModel.php');
$recipe = new recipeModel();

//VIEWS
$header = 'views/header.php';
$footer = 'views/footer.php';

if(empty($_GET['action'])) {
	$action = 'home';
}
else {
	$action = $_GET['action'];
}

//Hope page
if($action == 'home') {
	$results['data'] = $recipe->getRecipes();
	$view->getViews($header, 'views/homeView.php', $footer, $results);
}//end home
 
//Go to add recipe view
elseif($action == 'addRecipe') {
	$view->getViews($header, 'views/addView.php', $footer);
}//end addRecipe

elseif($action == 'insertRecipe') {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$category = $_POST['category'];
	$ingredients = $_POST['ingredients'];
	$directions = $_POST['directions'];
	
	$recipe->addRecipe($title, $description, $category, $ingredients, $directions);
	
	$view->getView('views/redirect.php');
	
}

elseif($action == 'recipe') {
	$id = $_GET['id'];
	
	$singleRecipe['data'] = $recipe->getRecipe($id);
	
	$view->getViews($header, 'views/recipeView.php', $footer, $singleRecipe);
	
}//end recipe

?>