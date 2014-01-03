<?php 

include('models/viewModel.php');
$view = new viewModel();
include('models/recipeModel.php');
$recipe = new recipeModel();

if(empty($_GET['action'])) {
	$action = 'home';
}
else {
	$action = $_GET['action'];
}

//Hope page
if($action == 'home') {
	$view->getViews('views/header.php', 'views/homeView.php', 'views/footer.php');
}//end home
 
//Go to add recipe view
elseif($action == 'addRecipe') {
	$view->getViews('views/header.php', 'views/addView.php', 'views/footer.php');
}//end addRecipe

elseif($action == 'insertRecipe') {
	$title = $_POST['title'];
	$description = $_POST['description'];
	$category = $_POST['category'];
	$ingredients = $_POST['ingredients'];
	$directions = $_POST['directions'];
	
	$recipe->addRecipe($title, $description, $category, $ingredients, $directions);
	
	$view->getViews('views/header.php', 'views/homeView.php', 'views/footer.php');
	
	echo $title . $description . $category . $ingredients . $directions;
	
}

?>