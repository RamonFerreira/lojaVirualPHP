
<?php
define('TB_ENDERECO','tb_endereco');
class EnderecoDAO{
	private $db;
	private $isSomeOneLogin  = 'select count(*) as count from tb_login';
	
	public function save($Endereco){
		
		$cep= $Endereco->__get("cep");
		$logradouro= $Endereco->__get("logradouro");
		$numero= $Endereco->__get("numero");
		$complemento= $Endereco->__get("complemento");
		$referencia= $Endereco->__get("referencia");
		
		$cidade= $Endereco->__get("cidade");
		$estado= $Endereco->__get("estado");
		$bairro= $Endereco->__get("bairro");
		
		$id_usuario_fk = $Endereco->__get("Usuario");
	
	     echo "--->>>".$id_usuario_fk;
		
		$campos ="'$cep', '$logradouro' ,$numero ,'$complemento' ,'$referencia' , '$cidade' ,'$estado' ,'$bairro' , $id_usuario_fk, sysdate() ,sysdate()";
		echo  $campos;
		$db = Banco::singleton();
		return $db->insert(TB_ENDERECO, $campos);
	}
	public function findById($id){
		$db = Banco::singleton();
		return $db->findById(TB_ENDERECO, $id);
		
	}
	
	
}			
?>