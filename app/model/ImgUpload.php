<?php
class ImgUpload{

    private	$img;
    private $imgSize;
    private $imgName;
    private $imgExt;
    private $imagepath;
    

    private $originalPath;
    private $tamanho_maximo;
    public function __get($key){
        return $this->$key;
    }
	public function __construct($file = null, $filekey = null, $originalPath){
	  	$this->img = isset($file[$filekey]) ? $file[$filekey]: FALSE;
	  	$this->tamanho_maximo = 1024*100;
	  	$this->originalPath = $originalPath;
	    //echo "".$this->img['name']."<br>";
	    //exit();
	    
	    if($this->img['name']!='')
	    {
	        $this->imgName    = $file[$filekey]['name'];
	        $this->imgSize    = $file[$filekey]['size'];

	        if($this->imgSize > $this->tamanho_maximo)
	        {
	             echo '<script language = javascript>

			                  alert ("Arquivo de imagem1 muito grande. Tamanho máximo permitido: 300kb");

			                  history.go(-1);

	                      </script>';
	        }
	        
	        $this->imgExt   = strtolower($this->getFileExtensao($this->imgName ));
	        $source          =  $file[$filekey]['tmp_name'];
	        $target = $originalPath.$this->imgName ;
	        move_uploaded_file($source,$target);
	        $this->imagepath = $this->imgName ;
	        
		}
	}

	public function reSize($path, $length, $width){

		$save = $path .md5($this->imagepath)."".$this->imgExt;
		
        $file = $this->originalPath .$this->imagepath;
       
        
        list($imgWidth, $imgLength)=getimagesize($file);
        
        if($imgWidth >$imgLength)
        {
            $modLargura = $width;
            $diff       = $imgWidth/$modLargura;
            $modAltura  = $imgLength/$diff;
            
        }else{
            $modAltura = $length;
            $diff      = $imgLength / $modAltura;
            $modLargura= $imgWidth/ $diff;
        }
        
        $tn = imagecreatetruecolor($modLargura,$modAltura);
        if($this->imgExt =='.jpg' || $this->imgExt == '.jpeg' || $this->imgExt=='JPG' || $this->imgExt=='.JPEG')
        {
            $image  =  imagecreatefromjpeg($file);
            
        }else if($this->imgExt=='.gif' || $this->imgExt =='.GIF')
        {
         $image = imagecreatefromgif($file);   
        }
           imagecopyresampled($tn, $image, 0, 0, 0, 0, $modLargura, $modAltura, $imgWidth, $imgLength) ; 	
        imagejpeg($tn, $save, 100);
        
	}

 	private function getFileExtensao($str)
    {
        $i=strrpos($str,".");
        if(!$i){return "";}
        $l = strlen($str)-$i;
        $ext=substr($str,$i,$l);
        return $ext;  
    }


}

?>