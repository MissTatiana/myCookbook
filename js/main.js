$(document).ready(function() {
	
	//Add additional inputs for ingredients
	var counter = 3;
	
	$("#addInput").click(function(a) {
		
		if(counter > 20) {
			alert("only 20 inputs allowed");
			return false;
		}//if
		
		var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
		
		newTextBoxDiv.after().html('<label for="ingredient' + counter + '">Ingredient ' + counter + ':</label>' +
								   '<input type="text" name="ingredient' + counter + '" id="ingredient' + counter + '">' );
		
		newTextBoxDiv.appendTo("#inputGroup");
		
		counter++;
		
		return false;
		
		
	});//addInput
	
	$("#deleteInput").click(function(b) {
		
		if(counter == 1){
			alert("No more inputs to delete");
			return false;
		}//if
		
		counter--;
		
		$("#inputGroup" + counter).remove();
		
	});//deleteInput
	
	$("#getValue").click(function () {
 
		var msg = '';
		for(i=1; i<counter; i++){
   	  		msg += "\n Textbox #" + i + " : " + $('#ingredient' + i).val();
		}
    	alert(msg);
     });//value

/*	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=
 * 						Add to db
 =	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	=	*/	
	var addRecipe = function() {
	
		$("#addSub").click(function () {
			
			console.log("add recipe clicked");
			var title = $("#title").val();
			var desc = $("#description").val();
			var category = $("#category  option:selected").val();
			var directions = $("#directions").val();
			
			var ingredients = '';
			for(i=1; i<counter; i++){
	   	  		ingredients += "\n" + $('#ingredient' + i).val();
			}
			
			$.ajax ({
				type: "post",
				dataType: "json",
				url: "../controllers/mainController.php",
				data: {
					title: title,
					description: desc, 
					category: category, 
					ingredients: ingredients,
					directions: directions
				},
				success: function (response) {
					console.log(response);
				}
			});//end ajax
			
			
		});//addSub
	};//end addRecipe
	

});//document ready

