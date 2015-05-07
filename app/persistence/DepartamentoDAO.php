<?php

define("TABLE","tb_departamento");
class DepartamentoDAO{
	
	public function save($Dep){
		$db = new Banco();
		$nome = $Dep->__get("nome");
		$posicao = $Dep->__get("posicao");
		$campos = "'$nome', $posicao, sysdate(), sysdate()";
		return $db->insert(TABLE, $campos);
	}


	public function update($Dep){
		$db = new Banco();
		$nome = $Dep->__get("nome");
		$posicao = $Dep->__get("posicao");
		$campos = "nome = '$nome', posicao = $posicao, dtmodificacao = sysdate()";
		$condicao =" sha1(id) ='".$Dep->__get("id")."'";
		return $db->update(TABLE, $campos, $condicao);
		
	}
	public function delete($Dep){
		$db = new Banco();
		$condicao = "sha1(id) ='".$Dep->__get("id")."'";
		return $db->delete(TABLE, $condicao);
	}

	public function retornaCampos($campos){
		$db = new Banco();
		return $db->selecionaTodos(TABLE,$campos);
	}
	

}

?>