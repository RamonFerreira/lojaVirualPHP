<?php


class Banco{
    public $rs;
	public $con;
	
	static private $instance;
	
	public function __construct(){
    	$this->con=mysqli_connect(DB_HOST, DB_USER, DB_PASS);
    	if(!$this->con){
    		$this->con=mysqli_connect(SERVER_HOST, USER_HOST, SENHA_HOST);
    		if(!$this->con){
    			die('Não foi possível conectar : ' .mysql_error());
    		}
    	}
    	$this->rs=mysqli_select_db($this->con,DB_NAME);
    	if(!$this->rs){
    		die('Não foi possível selecionar : ' .mysql_error() );
    	}
    }
    
    static public function singleton(){
        if(!isset(self::$instance)){
        	$class = __CLASS__;
        	self::$instance = new $class;
        }	
        
        return self::$instance;        
    }
    
    
    public function insert($table,$campo){
		$sql="insert into $table values(null,$campo)";
		echo "<br>".$sql ."<br>";
       	$this->rs=mysqli_query($this->con,$sql) or die("Erro insert :".mysqli_error($this->con));
		$idRegistro = mysqli_insert_id($this->con);
		return $idRegistro;
	}
	
	
	public function update($table,$campo,$condicao){
		$sql="update $table set $campo where  $condicao";
		$this->rs=mysqli_query($this->con,$sql);
		$retorno =1;
		if(!$this->rs){
			$retorno = 0;
			die('<br><br>Consulta Inválida : '.mysql_error());
		}
		return $retorno;
	}


	public function delete($table,$condicao){
		$sql="delete from $table where $condicao";
		$this->rs=mysqli_query($this->con,$sql);
		$retorno = 1;
		if(!$this->rs){
			die('<br><br>Não foi possivél excuir este registro tente mais tarde : '.mysql_error());
			$retorno = 0;
		}
		return $retorno;
	}

	public function findAll($table){
		$sql="select * from $table";
		$this->rs=mysqli_query($this->con,$sql);
		$retorno = $this->rs;
		if(!$retorno){
			die('<br><br>Consulta Inválida : '.mysql_error());
			exit(0);
		}
		return $retorno; 
	}

	public function selecionaTodos($table, $campos){
		$sql="select $campos from $table";
		$this->rs=mysqli_query($this->con,$sql);
		$retorno = $this->rs;
		if(!$retorno){
			die('<br><br>Consulta Inválida : '.mysql_error());
			return null;
		}
		return $retorno; 
	}

	public function find($table,$condicao){
		
		$sql="select * from $table where $condicao";
		$this->rs=mysqli_query($this->con,$sql);
		$retorno = mysqli_fetch_array($this->rs,MYSQLI_NUM);
		if(!sizeof($retorno)>0){
			die('<br><br>Consulta Inválida : '.mysql_error());
			//exit(0);
		}
		return $retorno;
	}
	
	public function getResult($camposRetorno,$table,$condicao){
		$sql="select $camposRetorno from $table where $condicao";
		$this->rs=mysqli_query($this->con,$sql);
		$retorno =false;
		$isLogin = mysqli_num_rows($this->rs);
		if($isLogin ==1){
			$retorno = true;
			//die('<br><br>Consulta Inválida : '.mysql_error());
		}
	   return $retorno;
	}
	
	
	public function count($table, $condicao){
		$query    = "select count(1) as count from $table where $condicao";
		$this->rs = mysqli_query($this->con, $query);
		$valor    = mysqli_fetch_array($this->rs,MYSQLI_BOTH);
		return $valor["count"]; 
	}
	
	
	public function recuperaParametros($table,$param,$condicao){
		$sql="select * from $table where $condicao";
		$this->rs=mysql_query($sql);
		if(!$this->rs){
			die('<br><br>Consulta Inválida : '.mysql_error());
		}
	}
	
	public function findById($table, $id){
		$query = "select * from $table where id=$id";
		$this->rs = mysqli_query($this->con, $query);
		if(!$this->rs)
			die("Erro findById :".mysqli_error($this->con));
		return mysqli_fetch_array($this->rs);
	}
	
	public function consultaRow($query){
		$this->rs = mysqli_query($this->con, $query);
		$retorno = mysqli_fetch_array($this->rs,MYSQLI_NUM);
		if(!$retorno){
			$retorno= false;
			die('<br><br>Consulta Inválida : '.mysql_error());
		}
		return $retorno;
	}
	public function consulta($query){
		$this->rs = mysqli_query($this->con, $query);
		$retorno =$this->rs;
		if(!$retorno){
			$retorno= false;
			die('<br><br>Consulta Inválida : '.mysql_error());
		}
		return $retorno;
	}
	
	public function retornaCountByQuery($query){
		$this->rs=mysqli_query($this->con,$query);
		$linha = mysqli_fetch_row($this->rs);
		return $linha[0];
	}
	
	

}

?>