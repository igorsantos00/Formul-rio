function validacao(){
	
	if (document.form.codigo.value  < 1 || document.form.codigo.value==""){
		alert("Por favor, preencha o campo Código da Mercadoria Válido.");
		document.form.codigo.focus();
		return false;
	}
	
		
	if (document.form.nome.value==""){
		alert("Por favor, preencha o campo Nome da Mercadoria.");
		document.form.nome.focus();
		return false;
	}
	
	if (document.form.tipo.value==""){
		alert("Por favor, preencha o campo Tipo da Mercadoria.");
		document.form.tipo.focus();
		return false;
	}
	
	if (document.form.quantidade.value < 1 || document.form.quantidade.value==""){
		alert("Por favor, preencha o campo Quantidade.");
		document.form.quantidade.focus();
		return false;
	}
	
	if (document.form.preco.value < 1 || document.form.preco.value==""){
		alert("Por favor, preencha o campo Preço.");
		document.form.preco.focus();
		return false;
	}
	
	if (document.form.negocio.value==""){
		alert("Por favor, preencha o campo  Tipo do Negócio.");
		document.form.negocio.focus();
		return false;

	}
	
	if(document.form.email.value== "" || document.form.email.value.indexOf('@')==-1|| document.form.email.value.indexOf('.')==-1) {
		alert("Por favor, digite um endereço de E-mail válido!");
		document.form.email.focus();
		return false; 
	}
	
	if(document.form.mensagem.value.length > 300) {
		alert("A mensagem não pode conter mais de 300 caracteres");
		document.form.mensagem.focus();
		return false;
	}
	
}