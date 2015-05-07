<?php

define("TABLE_MARCA","tb_marca");
class MarcaDAO{
	
	public function save($marca){
		
		$db = new Banco();
		$imagem = $marca->__get("imagem");
		$nome = $marca->__get("nome");
		$posicao = $marca->__get("posicao");
		$descricao = $marca->__get("descricao");
		$campos = "'$imagem', '$nome', $posicao,'$descricao', sysdate(), sysdate()";
		return $db->insert(TABLE_MARCA, $campos);

	}


	public function update($marca){
	
		$db = new Banco();
		$nome = $marca->__get("nome");
		$posicao = $marca->__get("posicao");
		$descricao = $marca->__get("descricao");
 		$campos="";
 		
 	    
 		if($marca->__get("imagem") != ''){
 	
 			$imagem = $marca->__get("imagem");
 			$campos = "imagem = '$imagem', nome='$nome', posicao = '$posicao', descricao= '$descricao', dtmodificacao = sysdate()";
 	
 		}else{
	
			$campos = "nome='$nome', posicao = '$posicao', descricao= '$descricao', dtmodificacao = sysdate()";	
 	
 		}

		$condicao =" sha1(id) ='".$marca->__get("id")."'";
		return $db->update(TABLE_MARCA, $campos, $condicao);
		
	}
	
	public function delete($marca){
		$db = new Banco();
		$condicao = "sha1(id) ='".$marca->__get("id")."'";
		return $db->delete(TABLE_MARCA, $condicao);
	}

	public function retornaCampos($campos){
		$db = new Banco();
		return $db->selecionaTodos(TABLE_MARCA,$campos);
	}
	
}

?>