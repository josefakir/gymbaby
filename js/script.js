$(document).ready(function() {

	$("#owl-example").owlCarousel({
  	  navigation : false, // Show next and prev buttons
  	  slideSpeed : 300,
  	  paginationSpeed : 400,
  	  singleItem:true
  	});

	$('#estado').change(function(){
		$.ajax({
			url : 'obtener-municipios.php?i='+$(this).val(),
			success : function(result){
				$('#municipio').html(result);
				$('#loading').fadeOut('fast');
			},
			beforeSend : function(){
				$('#loading').fadeIn('fast');
			}
		})
	})

	$('#form').validate({
		rules:{
			nombre : 'required',
			correo :{
				required: true,
				email : true
			},
			enteraste:'required',
			estado:'required',
			municipio:'required',
			edad:'required',
			comentarios:'required'
		},
		messages:{
			nombre : ' * Requerido',
			correo :{
				required: ' * Requerido',
				email : '* Correo Electrónico'
			},
			enteraste:' * Requerido',
			estado:' * Requerido',
			municipio:' * Requerido',
			edad:' * Requerido',
			comentarios:' * Requerido'
		},
		errorElement: "span",
		submitHandler: function (e) {
			$('#boton').hide();
			$('#loading2').show();
			var d = $("#form").serialize();
			$.ajax({
				type: "POST",
				url: "email.php",
				data: d,
				success: function (f) {
					alert(f);
					$('#boton').show();
					$('#loading2').hide();
				}
			});
		}
	});
});