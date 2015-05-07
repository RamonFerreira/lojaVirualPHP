
<?php
include '../config.php';


if(isset($_REQUEST['cmd'])){
	
	$cmd =$_REQUEST['cmd'];
	switch ($cmd){

		case sha1('login'):

		    $LoginBusines = new LoginBusiness();
		    $flag = $LoginBusines->logar($_POST['email'], $_POST['senha']);

		    if($flag==1){

		    	header("Location: ".CONTEXTO."/admin/inicio");

		    }else if($flag==2){

		    	header("Location: ".CONTEXTO."/user/inicio");

		    }else{

		    	 $_SESSION["MSG_ERRO"]="login invalido";
		    	header("Location: ".CONTEXTO);

		    }

			break;
			case sha1('logout'):
				session_destroy();
				header("Location: ".CONTEXTO."/admin/inicio");
			break;
	}
	
	
}else {

	header("Location: ".CONTEXTO."/admin/inicio");
	
}
?>