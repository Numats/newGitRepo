//GET HTTP Request

$(document).ready(function(){
	  //alert('hello');
		$('#button').click(function(){
	 		var string = $('.box').val();
	 // alert(string);
                         //var name         call back
                         //(string above)   function
	  $.get('info.php', {input: string}, function(data){
	  	    //sent to...  var input     info stored in 
	  	                 //contains var        data on the way 
	  	                 //string's value         back from insert.php
      		//output contents of insert.php will be stored in data
	  		$('#feedback').text(data);
	  	});

	});
});