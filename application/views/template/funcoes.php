<script type="text/javascript">
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

	$(document).on('click', '.selector-cadastro', function(e){
		e.preventDefault();
		$("#form-login").animate({
			opacity: 0,
			hidden: "toggle"
		}, 1000, function() {
			$('.btn-login-cadastro').addClass('btn-cadastro');
			$('.btn-login-cadastro').removeClass('btn-login');
			$('.btn-login-cadastro').text('Cadastrar');
			$('#form-cadastro').animate({
				hidden: "toggle",
				opacity: 1
			}, 1000);
		});
	});
	
	$(document).on('click', '.selector-login', function(e){
		e.preventDefault();
		$("#form-cadastro").animate({
			opacity: 0,
			hidden: "toggle"
		}, 1000, function() {
			$('.btn-login-cadastro').addClass('btn-login');
			$('.btn-login-cadastro').removeClass('btn-cadastro');
			$('.btn-login-cadastro').text('Login');
			$('#form-login').animate({
				hidden: "toggle",
				opacity: 1
			}, 1000);
		});
	});

	$(document).on('click', '.btn-login', function(e){
		e.preventDefault();
		if ($('#form-login').find('input[name="login-email"]').val() == '') {
			alert('Por favor preencha o email.');
			$('#form-login').find('input[name="login-email"]').focus();
			return false;
		} else if ($('#form-login').find('input[name="login-senha"]').val() == '') {
			alert('Por favor preencha a senha.');
			$('#form-login').find('input[name="login-senha"]').focus();
			return false;
		} else {
			$('#form-login').submit();
		}
	});

	$(document).on('click', '.btn-cadastro', function(e){
		e.preventDefault();
		if ($('#form-cadastro').find('input[name="cadastro-nome"]').val() == '') {
			alert('Por favor preencha o nome.');
			$('#form-cadastro').find('input[name="cadastro-nome"]').focus();
			return false;
		} else if ($('#form-cadastro').find('input[name="cadastro-email"]').val() == '') {
			alert('Por favor preencha o email.');
			$('#form-cadastro').find('input[name="cadastro-email"]').focus();
			return false;
		} else if ($('#form-cadastro').find('input[name="cadastro-senha"]').val() == '') {
			alert('Por favor preencha a senha.');
			$('#form-cadastro').find('input[name="cadastro-senha"]').focus();
			return false;
		} else if ($('#form-cadastro').find('input[name="cadastro-senha-confirm"]').val() == '') {
			alert('Por favor preencha a confirmação de senha.');
			$('#form-cadastro').find('input[name="cadastro-senha-confirm"]').focus();
			return false;
		} else if ($('#form-cadastro').find('input[name="cadastro-senha-confirm"]').val() != $('#form-cadastro').find('input[name="cadastro-senha"]').val()) {
			alert('As senhas não conferem, por favor verifique.');
			$('#form-cadastro').find('input[name="cadastro-senha-confirm"]').focus();
			return false;
		} else {
			$('#form-cadastro').submit();
		}
	});
</script>