<?php


class MarcaBusiness{
	
	public function retornaCampos($campos){
	
		$mDAO = new MarcaDAO();
		$rs = $mDAO->retornaCampos($campos);
	    return $rs;
	}
}


?>