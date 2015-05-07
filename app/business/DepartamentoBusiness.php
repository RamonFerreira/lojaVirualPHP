<?php


class DepartamentoBusiness{
	
	public function retornaCampos($campos){
	
		$dpDAO = new DepartamentoDAO();
		$rs = $dpDAO->retornaCampos($campos);
	    return $rs;
	}
}


?>