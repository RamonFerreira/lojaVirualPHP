
<?php
define('TB_LOGIN','tb_login');
define("INSERT_LOGIN", "insert into tb_login(id, cpf, email, senha, tipo, situacao, remail, dtcadastro,dtmodificacao)");
class LoginDAO{
	private $db;
	private $isSomeOneLogin  = 'select count(*) as count from tb_login';
	
	public function save($Login){
		$cpf= $Login->__get("cpf");
		$email=$Login->__get("email");
		$senha=$Login->__get("senha");
		$tipo=$Login->__get("tipo");
		$remail=$Login->__get("remail");
		$situacao=$Login->__get("situacao");
		$isLogado = "S";
		$campos ="'$cpf', '$email', sha1('$senha'), '$tipo', '$situacao', '$remail','$isLogado',sysdate(),sysdate()";
		$db = Banco::singleton();
		return $db->insert(TB_LOGIN, $campos);
	}
	public function findById($id){
		$db = Banco::singleton();
		return $db->findById(TB_LOGIN, $id);
		
	}
	public function isLogin(){
		$db = Banco::singleton();
		$db->consulta($this->isSomeOneLogin);
		$linha =mysqli_fetch_array($db->rs,MYSQLI_BOTH);
		return $linha['count'];
	}
	
	public function isLogonByCPF($cpf){
		$query =$this->isSomeOneLogin." where cpf='$cpf'";
		$db = Banco::singleton();
		$db->consulta($query);
		$linha =mysqli_fetch_array($db->rs,MYSQLI_BOTH);
		return $linha['count'];
	}
	public function isLogonByCPFAndEmail($cpf, $email){
		$query =$this->isSomeOneLogin." where cpf='$cpf' and email='$email' ";
		$db = Banco::singleton();
		$db->consulta($query);
		$linha =mysqli_fetch_array($db->rs,MYSQLI_BOTH);
		return $linha['count'];
	}
	public function isLogonByEmail($email){
		$query =$this->isSomeOneLogin." where email='$email'";
		$db = Banco::singleton();
		$db->consulta($query);
		$linha =mysqli_fetch_array($db->rs,MYSQLI_BOTH);
		return $linha['count'];
	}
	
	public function logar($emailOuCpf , $senha){
		$db = Banco::singleton();
		$query = "select id, cpf, email, situacao, tipo from ".TB_LOGIN." where (email = '$emailOuCpf' or cpf = '$emailOuCpf' ) and senha = sha1('$senha')";
		$db->consulta($query);
		$Login = new Login();
		$linha =mysqli_fetch_array($db->rs,MYSQLI_BOTH);
		if($linha){
			
				foreach($linha as $property => $value){
					$Login->__set($property, $value);
					echo $Login->__get($property) ."<br>"; 
				}
			
		}else{
			return 0;
		}
	
		return $Login;
	}
}			
?>