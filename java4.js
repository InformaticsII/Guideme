$(document).ready(function() {

 $('#string').keyup(function() {
 	var name=$('#string').val();
 	$.post('ajax_search.php',{name:name},function(data){

 		$('#content').html(data);
 	});

 });

});
