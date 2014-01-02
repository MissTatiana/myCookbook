<?php 

include('models/viewModel.php');
$view = new viewModel();

if(empty($_GET['action'])) {
	$action = 'home';
}
else {
	$action = $_GET['action'];
}


if($action == 'home') {
	$view->getViews('views/header.php', 'views/homeView.php', 'views/footer.php');
}//end home
 
elseif($action == 'addRecipe') {
	$view->getViews('views/header.php', 'views/addView.php', 'views/footer.php');
}//end addRecipe

?>