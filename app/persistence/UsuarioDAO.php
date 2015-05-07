
<?php
define("TB_USUARIO", "tb_usuario");
class UsuarioDAO{

	public function isUsuarioByCpf($cpf){
	   $db = Banco::singleton();
	   $condicao = "cpf = '$cpf'";
	   return $db->count(TB_USUARIO, $condicao);
	}
	public function save($Usuario){
		
		$id              = $Usuario->__get("id");
		$nome            = $Usuario->__get("nome");
		$sobrenome       = $Usuario->__get("sobrenome");
		$telresidencial  = $Usuario->__get("telresidencial");
		$telcelular      = $Usuario->__get("telcelular");
		$telcomercial    = $Usuario->__get("telcomercial");
		$dtnascimento    = $Usuario->__get("dtnascimento");
		$cpf             = $Usuario->__get("cpf");
		$sexo            = $Usuario->__get("sexo");
		$situacao        = $Usuario->__get("situacao");
		$tipo            = $Usuario->__get("tipo");
		$idLogin         = $Usuario->__get("Login")->__get("id");
		
		$campos ="'$nome', '$sobrenome', '$telresidencial', '$telcelular', '$telcomercial', '$dtnascimento', '$cpf', '$sexo', '$situacao', '$tipo', $idLogin,sysdate(),sysdate()";
		$db = Banco::singleton();
		return $db->insert(TB_USUARIO, $campos);
	}	
	
	public function findById($id){
		$db = Banco::singleton();
		return $db->findById(TB_USUARIO, $id);
	
	}
	
}			
?>