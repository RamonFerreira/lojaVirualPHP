<!DOCTYPE html>
<?PHP 
	include_once '../../config.php'; 

 	$linkDepartamento = 'departamento';
   	$linkMarca        = 'marca';
   	$linkProduto      = 'produto';
   	
   	if(isset($_REQUEST['cmd'])){
   		if(isset($_REQUEST['id'])){
   			$linkDepartamento = '../../departamento';
		   	$linkMarca        = '../../marca';
		   	$linkProduto      = '../../produto';  
   		}else{
		 	$linkDepartamento = '../departamento';
		   	$linkMarca        = '../marca';
		   	$linkProduto      = '../produto';   
	   }
	}


if(isset($_SESSION["Login"])){
	
	$Login = new Login();

	if($Login->isLogin($_SESSION['Login']) ==1 ){

		$Login =$_SESSION['Login'];

		if($Login->__get('tipo')=='U'){
			$_SESSION["MSG_ERRO"] ="Voce e um Usuario nao autorisado";
			header("Location: ".CONTEXTO."/");
		}

		include_once '../../include/adm/topo.php';
		
		include_once '../../include/adm/header.php';
		
		include_once '../../include/adm/wrapper.php';
		
		include_once '../../include/adm/fundo.php';

	}
	else{
			header("Location: ".CONTEXTO."/");
	}
}else{
	header("Location: ".CONTEXTO."/");
}

?>


 
  
  
  
  
  
  