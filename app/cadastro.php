<?php
	include_once 'config.php';
    $login   = new Login();
	$usuario = new Usuario();
	$endereco = new Endereco();
	
	if(count($_POST)>0){
		
	    $loginBusiness = LoginBusiness::singleton();
	    $UsuarioDAO = new UsuarioDAO();
	    
	    $login->__set('tipo',$loginBusiness->retornaTipoLogin());
	    $login->__set('situacao','AC');
        $cep         = $_POST['nuCep'].$_POST['coCep'];
		$endereco->__set("cep", $cep);
		foreach($_POST as $property=>$value){
			$login->__set($property, $value);
			$usuario->__set($property, $value);
		}
		
		if($loginBusiness->isUsuario($usuario->__get("cpf"),$usuario->__get("email")) || $UsuarioDAO->isUsuarioByCpf($usuario->__get("cpf"))>0){
			unset($_SESSION["MSG_ERRO"]);
			$_SESSION["MSG_ERRO"] = "Usuario Já Cadastrado Para Este CPF/Email";
			print_r($_SESSION);
			header("Location: login");
		}
		
		$usuario->__set('Login', $login);
		$usuario->__set('Endereco', $endereco);
		$inLogin = "class='active'";
		$inHome  = "";
		include_once 'include/site/topo.php';
		include_once 'include/fCadastroCompleto.php';
		include_once 'include/site/fundo.php';
		
	}else{
		$_SESSION["MSG_ERRO"] = "Percha Os Campos A Seguir";
		header("Location: login");
	}
?>