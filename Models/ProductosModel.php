<?php 

class ProductosModel extends MySQL
{
    public function __construct(){
        parent::__construct();
    }

    public function Guardar_Productos(string $nombre, int $numero_referencia, int $precio ,int $peso, int $stock,string $fecha, string $categoria){
        try {
        $this->strnombre_producto = $nombre;
        $this->intnumero_referencia = $numero_referencia;
        $this->intnombre_precio = $precio;
        $this->intpeso = $peso;
        $this->intnstock = $stock;
        $this->datefecha = date('d/m/Y');;
        $this->strcategoria = 1;
      

    
        $consulta =  "INSERT INTO  productos (`nombre_producto`, `referencia`, `precio`, `peso`, `stock`, `fecha_creacion_producto`, `id_categoria`)   VALUES ('$nombre', '$numero_referencia', '$precio', '$peso', '$stock', '$fecha', '$categoria')";
        $arrInformacion = array($this->strnombre_producto, $this->intnumero_referencia,$this->intnombre_precio, $this->intpeso,$this->intnstock, $this->strcategoria,$this->datefecha,$this->strcategoria);
        $peticion = $this->Insert($consulta, $arrInformacion);
        $respuesta = $peticion;

        return $respuesta;
    } catch (Exception $e) {
        echo "Error en la consulta sql" . $e;
     }
    }

  
}