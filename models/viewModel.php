<?php

class viewModel {
		
	function getViews($header='', $myfile='', $footer='', $data=array()) {
		include $header;	
		include $myfile;
		include $footer;
	}	
	
	function getView($myfile='', $data=array()) {
		include $myfile;
	}
	
}//end viewModel

?>