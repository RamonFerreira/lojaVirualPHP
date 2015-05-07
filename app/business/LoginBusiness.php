
<?php
	class LoginBusiness{
		
		static private $instance;
		static public function singleton(){
			if(!isset(self::$instance)){
				$class = __CLASS__;
				self::$instance = new $class;
			}
			return self::$instance;
		}
		private $lDao;
		private $erro;
		

		public function logar($emailOuCpf, $senha){
			$lDao = new LoginDAO();
			$Login = new Login();
			$Login = $lDao->logar($emailOuCpf, $senha);
			$retorno = 0; // 0 login invalido;
			if($Login){
				$_SESSION["Login"] = $Login;
				if($Login->__get("tipo") =="A"){
					$retorno=1;
				}else{
					$retorno=2;
				}
				$_SESSION["LUser"] = $Login;
			}
			return $retorno;
		}
		public function save($Login){
			$lDao = new LoginDAO();
			foreach ($lDao->findById($lDao->save($Login)) as $property => $value){
				$Login->__set($property, $value);
			}
			return $Login;
		}
		
		function isUsuario($cpf,$email){
			$lDao  = new LoginDAO();
			$isCpf =$lDao->isLogonByCPF($cpf);
			$isEmail=$lDao->isLogonByEmail($email);
			$isCpdEmail = $lDao->isLogonByCPFAndEmail($cpf, $email);
			$retorno =0;
			if($isCpf == 1 && $isEmail==0){
				if($isCpdEmail == 1 ){
				    $retorno =1;
				}
				
			}
			return $retorno;
		}
		
		function verificaLogin($cpf,$email){
			$lDao  = new LoginDAO();
			$isCpf =$lDao->isLogonByCPF($cpf);
			$isEmail=$lDao->isLogonByEmail($email);
			$isCpdEmail = $lDao->isLogonByCPFAndEmail($cpf, $email);
			$retorno =0;
			
			if($isCpf == 1 && $isEmail==1){
				if($isCpdEmail == 1 ){
				    $retorno =1;
				}
				
			}
			return $retorno;
		}
		
		public function isPrimeiroCadastro(){
			$lDao = new LoginDAO();
			$lDao->isLogin();
			
		}
		
		public function retornaTipoLogin(){
			$lDao = new LoginDAO();
			$retorno = "U";
			if($lDao->isLogin() == 0){
				$retorno="A";
			}
			return $retorno;
		}
		
		
	}		
?>