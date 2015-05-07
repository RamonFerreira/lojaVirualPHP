

window.onload=init;

function init(){
	validElementsRequired();	
}

function validElementsRequired(){	
	var forms    = document.forms;
	for (var i = 0; i < forms.length ; i++) {
		eventClick(forms[i].elements);
	};

/*
	arrMsgToForm[i] = arrNameFieldRequired;
		arrNameFieldRequired = new Array();

	strMsgFildRequired="";
	for (var i = 0 ; i < arrMsgToForm.length ; i++) {
		for(var j =0 ; j < arrMsgToForm[i].length ; j++){
			strMsgFildRequired	 +=  arrMsgToForm[i][j] +'</br>';
		}
	};
*/
	//console.log(strMsgFildRequired);	
   // return arrMsgToForm;
}

function eventClick(elements){ 
	var arrMsgToForm           =  new Array();
	var arrNameFieldRequired =  new Array();
	campos = "";
	var btCadastro = elements.btCad;
	cont = 0;
	btCadastro.addEventListener('click',function(){
		els =elements;
		for(var j = 0 ; j < els.length ; j++){
	
			if(els[j].attributes['req']!=undefined){
		
				if(els[j].attributes['req'].value='true'){
		
					if(els[j].value==''){
							
						arrNameFieldRequired[arrNameFieldRequired.length] =els[j].attributes['name'].value ;
						
						campos  +=cont +" - "+ els[j].attributes['name'].value +" | ";
					}
				}	
	
			}
		}
		
		cont++;
		$("div[id=mensagem] label").html(campos);
		$("div[id=mensagem]").show();
		console.log(campos);
		campos = "";
	}); 
}