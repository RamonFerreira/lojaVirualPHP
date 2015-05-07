<?php
include '../config.php';
if(isset($_REQUEST)){
	$cmd  = "aborte";
	 if(isset($_REQUEST['cmd'])){
	    $cmd =	$_REQUEST['cmd'];
	 }
	switch ($cmd){
		case  sha1('insert'):
			$Dep = new Departamento();
			foreach ($_POST as $k=>$v){
				$Dep->__set($k, $v);
			}
			
			$depDAO = new DepartamentoDAO();
			if($depDAO->save($Dep)==0){
				
			}
			
			header("Location: ".CONTEXTO."/admin/departamento");
			
			break;
		case  sha1('update'):

			$Dep = new Departamento();
			foreach ($_POST as $k=>$v){
				$Dep->__set($k, $v);
			}

			$depDAO = new DepartamentoDAO();
			if($depDAO->update($Dep)==1){
			
			}
			header("Location: ".CONTEXTO."/admin/departamento");
			break;
		case  sha1('delete'):

			$Dep = new Departamento();
			foreach ($_REQUEST as $k=>$v){
				$Dep->__set($k, $v);
			}

			$depDAO = new DepartamentoDAO();
			if($depDAO->delete($Dep)==1){
			
			}
			header("Location: ".CONTEXTO."/admin/departamento");

			break;
		case  'aborte':
			break;
	}
	
}	
?>