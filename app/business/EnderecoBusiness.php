
<?php
		
	class EnderecoBusiness{

     	function save($Endereco){
     		$EnderecoDAO = new EnderecoDAO();
     		/*foreach ( $EnderecoDAO->findById($EnderecoDAO->save($Endereco)) as $property => $value){
     			$Endereco->__set($property, $value);
     		}*/
     		return  $EnderecoDAO->save($Endereco);
		}

		
	}	
?>