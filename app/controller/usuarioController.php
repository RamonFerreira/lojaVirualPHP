
<?php
	include '../config.php';
	if(count($_POST)>0){
		if($_POST["cmd"]){
			$cmd = $_POST["cmd"];

			switch ($cmd){
				case sha1("cadastro"):
					$Login     = new Login();
					$Usuario   = new Usuario();
					$Endereco  = new Endereco();
					foreach($_POST as $property => $value){
						//echo $property .'-->'.$value.'<br>';
						if($property == 'cpf'){
							$value =  preg_replace('#([. -])#', "", $value );
						}if($property == 'telresidencial' || $property == 'telcelular' || $property == 'telcomercial' ){
							$value = preg_replace('#([. - \(\)])#', "", $value  );
						}
						$Login->__set($property, $value);
						$Usuario->__set($property, $value);
						$Endereco->__set($property, $value);
					}
					$remail = "N";
					if(isset($_POST['remail'])){
						$remail="S";
					}
					
					$Login->__set("remail", $remail);
					
					$LoginBusiness = LoginBusiness::singleton();
					$Login = $LoginBusiness->save($Login);
					if(isset($Login)){
						$UsuarioBusiness= new UsuarioBusiness();
						$Usuario->__set("Login", $Login);
						$id_usuario = $UsuarioBusiness->save($Usuario);
						if(isset($Usuario)){
							$EndBusiness  = new EnderecoBusiness();
					    	$Endereco->__set("Usuario",$id_usuario);
					    	$Endereco = $EndBusiness->save($Endereco); 
					    	$Usuario->__set("Endereco", $Endereco);
					    	$Login->__set("Usuario", $Usuario);
							if(isset($Endereco)){
							   $_SESSION['MSG_ERRO'] = "Usuario Cadastrado Com Sucessp";
							   header("Location: ".CONTEXTO."/login");
							}
					    }
					}
					
					
					
					
					
				}
			
		}
	}else{
		header("Location: ".CONTEXTO."/inicio");
	}
	
	
?>