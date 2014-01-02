$( document ).ready(function() {
	
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
	
	$("#getButtonValue").click(function () {
 
		var msg = '';
		for(i=1; i<counter; i++){
   	  		msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
		}
    	alert(msg);
     });//value

});