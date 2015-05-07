
<?php

/*create table tb_login(
-id       int primary key auto_increment,
-cpf      varchar(12)  not null unique,
-email    varchar(100) not null unique,
-senha    varchar(41)  not null,
-tipo        enum('A','U'),
-situacao    enum('A','B','S','C','E','AC'),
-remail      enum('S','N'),
-islogado    enum('S','N'),
-dtcadastro    date,
-dtmodificacao date
);
*/
 class Login{
  	private $id;
    private $cpf;
    private $email;
	private $senha;
	private $tipo;
	private $situacao;
    private $remail;
	private $Usuario;
	
	private $isLogado;
	private $dtcadastro;
	private $dtmodificacao;
    function  __construct(){
		
	}
	
	
   public function isLogin($Login){
		$LB = new LoginBusiness();
		return $LB->verificaLogin($Login->__get('cpf'),$Login->__get('email'));
   }
   
	public function __get($property) {
	    if (property_exists($this, $property)) {
	      return $this->$property;
	    }
  	}

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
    return $this;
  }
}			
?>