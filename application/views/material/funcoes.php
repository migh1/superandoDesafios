<script type="text/javascript">
	$('.telefone').mask('(00) 0000-00009');
	$('.telefone').blur(function(event) {
		if($(this).val().length < 14){ // Celular com 9 dígitos + 2 dígitos DDD e 4 da máscara
			$('.telefone').val('');
		}
	});

	function validacaoEmail(field) {
		usuario = field.val().substring(0, field.val().indexOf("@"));
		dominio = field.val().substring(field.val().indexOf("@")+ 1, field.val().length);
		if (
			(usuario.length >=1) &&
			(dominio.length >=3) && 
			(usuario.search("@")==-1) && 
			(dominio.search("@")==-1) &&
			(usuario.search(" ")==-1) && 
			(dominio.search(" ")==-1) &&
			(dominio.search(".")!=-1) &&      
			(dominio.indexOf(".") >=1)&& 
			(dominio.lastIndexOf(".") < dominio.length - 1)
		) {
			return true;
		} else {
			alert("E-mail inválido");
			return false;
		}
	}

	$(document).on('focusout', '.email', function(){
		var email = $(this);
		if (email.val() != "") {
			if(!validacaoEmail(email)){
				email.val('');
			}
		}
	});
	
	$(document).on('click', '.btn-primary', function(e){
		e.preventDefault();
		if ( $(this).parents('.flip-container').hasClass('flip-container-hover') ) {
			$(this).parents('.flip-container').removeClass('flip-container-hover');
		} else {
			$(this).parents('.flip-container').addClass('flip-container-hover');
		}
	});

	$(document).on('click', '.selector-btn-matricula', function(e){
		e.preventDefault();
		var input = $(this).parents('.card');

		if (input.find('input[name="matricula-nome"]').val() == '') {
			alert('Por favor preencha o seu nome completo.');
			input.find('input[name="matricula-nome"]').focus();
			return false;
		} else if (input.find('input[name="matricula-email"]').val() == '') {
			alert('Por favor preencha o seu email.');
			input.find('input[name="matricula-email"]').focus();
			return false;
		} else if (input.find('input[name="matricula-telefone"]').val() == '') {
			alert('Por favor preencha o seu telefone.');
			input.find('input[name="matricula-telefone"]').focus();
			return false;
		} else if (input.find('input[name="matricula-horario"]:checked').val() == undefined) {
			alert('Por favor preencha o horario.');
			return false;
		} else {
			$('body').addClass('body-grey-loader');
			$('.loader').removeClass('hidden');

			input.find('form').submit();
			alert('Uma solicitação de matrícula será enviada, por favor aguarde que em instantes receberá um email com a confirmação.');
		}
	});

	$(document).on('click', '.selector-arquivo', function(e){
		e.preventDefault();
		$('.selector-arquivo-hidden').trigger('click');
	});

	$(document).on('change', '.selector-arquivo-hidden', function(){
		$('#selector-nome-arquivo').text($(this).val().split('fakepath\\')[1]);
	});

	$(document).on('click', '.selector-btn-youtube', function(){
		var url = '<?php echo base_url('index.php/site/visualizarArquivo') ?>';
		$.ajax({
			url: url+'/'+$(this).data('id'),
			dataType: 'JSON',
			success: function(retorno){
				console.log(retorno);
				$('#modalVerVideo .selector-conteudo-youtube').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/'+retorno+'?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');
				$('#modalVerVideo').modal('show');
			},
			error: function(error){console.log(error);},
			complete: function(retorno){console.log(retorno);}
		});
				
	});
</script>