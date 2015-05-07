$(function() {
    $('.mask').inputmask(); 
	initMask();
});


function initMask(){
	$(".data").mask("99/99/9999");
	$(".hora").mask("99:99");
	$(".telefone").mask("(99) 9999-9999?9");
	$(".cep").mask("99999-999");
	$(".celular").mask("(99) 9-9999-9999?9");
	$(".cpf").mask("999.999.999-99");
	$(".cnpj").mask("99.999.999/9999-99");
}