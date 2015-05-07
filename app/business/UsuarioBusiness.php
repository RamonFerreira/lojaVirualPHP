
<?php
	
class UsuarioBusiness{
	
	public function isUsuarioByCPF($cpf){
		$UsuarioDAO = new UsuarioDAO();
		return  $UsuarioDAO($cpf);
	}
	public function save($Usuario){
		$UsuarioDAO = new UsuarioDAO();
		/*foreach ( $UsuarioDAO->findById($UsuarioDAO->save($Usuario)) as $property => $value){
			$usu->__set($property, $value);
		}
		var_dump($usu);*/
		return $UsuarioDAO->save($Usuario);
    }
}		

?>