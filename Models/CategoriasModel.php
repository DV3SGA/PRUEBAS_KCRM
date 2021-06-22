<?php 

class CategoriasModel extends MySQL
{
  
    // private $nombre_categoria;
    // private $descripcion;

    private $strnombre_categoria;
    private $strdescripcion;
  
    
    public function __construct(){
        parent::__construct();
    }


    public function Guardar_Categorias(string $nombre_categoria, string $descripcion){
        try {
        $this->strnombre_categoria = $nombre_categoria;
        $this->strdescripcion = $descripcion;
    
         
        $consulta = "INSERT INTO categorias (`nombre_categoria`,`descripcion`) VALUES('$nombre_categoria','$descripcion')";
        $arrInformacion = array($this->strnombre_categoria, $this->strdescripcion);
        $peticion = $this->Insert($consulta, $arrInformacion);
        $respuesta = $peticion;

        return $respuesta;
    } catch (Exception $e) {
        echo "Error en la consulta sql" . $e;
     }
    }
    



  


  

  
}