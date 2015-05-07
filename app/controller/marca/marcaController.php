<?php
include '../../config.php';
if(isset($_REQUEST)){
    $ext_type = array('gif','jpg','jpe','jpeg','png');
	$cmd= '';
	if(isset($_REQUEST['cmd'])){
		$cmd=$_REQUEST['cmd'];
	}
	switch ($cmd) {
		case sha1('insert'):
			if(isset($_FILES)){
				$tamanho_maximo = 1024 * 100;
				$tiposAceitos = $arrayName = array("image/gif","image/png","image/pjpeg",
													"image/jpeg","image/x-png","image/bmp",
													"image/jpg");
				$arquivo = $_FILES["imagem"];
				if($arquivo['error'] !=0){
					echo "<p><b>Erro no Upload do arquivo";
					switch ($arquivo['error']) {
						case UPLOAD_ERR_INI_SIZE:
							 echo "O arquivo exede o tamanho máximo";
							break;
						case UPLOAD_ERR_FORM_SIZE:
							 echo "O arquivo Enviado é muito grande";
							break;
						
						case UPLOAD_ERR_PARTIAL:
							 echo "O arquivo não foi completo";
							break;

						case UPLOAD_ERR_NO_FILE:
							 echo "Nenhum arquivo enviado para upload";
							break;
								
						default:
							# code...
							break;
					}
                    echo "</b></p>";
					exit();

				}

			if($arquivo['size'] == 0 || $arquivo['tmp_name'] == null){
				echo "Envie um arquivo";
				exit();
			}
			if($arquivo['size']> $tamanho_maximo){
				echo "O arquivo enviado é maior que o limite:".round(tamanho_maximo/1024)."KB";
				exit();
			}
			if(array_search($arquivo['type'],$tiposAceitos)===FALSE){

				echo "O arquivo enviado não é do tipo (".$arquivo['type'].") aceito para upload.
				os tipos aceitos são:";
				echo "<pre>";
				print_r($tiposAceitos);
				echo "</pre>";
				exit();

			}	

            $uploadDirOriginal = $_SERVER['DOCUMENT_ROOT']."/". CONTEXTO.'/app/resources/site/img/marca/original/';
            $uploadDirSmall = $_SERVER['DOCUMENT_ROOT']."/". CONTEXTO.'/app/resources/site/img/marca/small/';
            $uploadDirthumbnails  = $_SERVER['DOCUMENT_ROOT']."/". CONTEXTO.'/app/resources/site/img/marca/thumbnails/';
            $destino = realpath($uploadDirOriginal).'\\'.$arquivo['name'];
            $imgUpload = new ImgUpload( $_FILES, "imagem" , $uploadDirOriginal);
            $imgUpload->reSize($uploadDirOriginal,800, 800);
            $imgUpload->reSize($uploadDirSmall,200, 200);
            $imgUpload->reSize($uploadDirthumbnails,90, 90);
            $imageName = md5($imgUpload->__get("imgName"))."".$imgUpload->__get("imgExt");
            insert($_REQUEST, $imageName);
			

		}

			break;

		case sha1('update'):

				$marca = new Marca();
				if($_FILES['imagem']['error'] ==0){
					$marca->__set('imagem', $_FILES['imagem']['name']);
				}

				foreach ($_REQUEST as $k=>$v){
					$marca->__set($k, $v);
				}

	 			$marcaDAO = new MarcaDAO();
				if($marcaDAO->update($marca)==1){
				
				}
				


			break;
		case sha1('delete'):
			
				$marca = new Marca();
				foreach ($_REQUEST as $k=>$v){
					$marca->__set($k, $v);
				}

				 $marcaDAO = new MarcaDAO();
				if($marcaDAO->delete($marca)==1){
				
				}
				
			break;


		default:
			
			break;
	}

	header("Location: ".CONTEXTO."/admin/marca?ab=1");
}




 function insert($request, $nameFile){
   
	$marca = new Marca();
	$marca->__set('imagem',$nameFile);

    $marcaDAO = new MarcaDAO();

	foreach ($request as $key => $value) {

		$marca->__set($key, $value);

	}

	if($marcaDAO->save($marca)){
		//echo 'fod';
	}else{
		//echo 'errp';
	}

}























 function uploadImgSizeOriginal($file, $path){
      
	$uploadFile= $path. basename($file['imagem']['name']);
	if(!file_exists($path)){
		mkdir($path, 0777, true);
	}
	
	//echo $file['imagem']["tmp_name"].'----------------------<br>';
    echo $uploadFile.'----------------------<br>';
	if(move_uploaded_file($file['imagem']["tmp_name"], $uploadFile)){
	//	echo '<br>sucesso ao inserir a imagem com tamanho original<br>';
	}else{
	//	echo '<br>falha ao inserir a imagem com tamanho original <br>';
	}
}










?>