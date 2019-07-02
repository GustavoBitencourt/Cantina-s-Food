$(document).ready(function(){

	$('#campo').keyup(function(){

		$('form').submit(function(){

			var dados = $(this).serialize();

			$.ajax({

				url: 'pesquisar2.php',
				type: 'post',
				dataType: 'html',
				sucess: function(data){
					$('$resultado').empty().html(data);
				}

			});

			return false;

		});

		$('form').trigger('submit');

	});


});