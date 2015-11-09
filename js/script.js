$(document).ready(function() {
 
  $("#owl-example").owlCarousel({
  	  navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
  });
  $('#layout').layout();
  	$('#estado').change(function(){
  		$.ajax({
  			url : 'obtener-municipios.php?i='+$(this).val(),
  			success : function(result){
  				$('#municipio').html(result);
  			}
  		})
  	})
});