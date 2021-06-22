<?php

class Productos extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }


    
    public function CrearProductos()
    {

        $data['page_id'] = 1;
        $data['page_tag'] = 'Crear Producto';
        $data['page_title'] = 'Crear Producto';
        $data['page_functions_js'] = 'function_productos.js';
        $data['page_header'] = 1;
        $this->views->getView($this, "crear_productos", $data);
    }

  

    public function ResumenProductos()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = 'Cotizador soat';
        $data['page_title'] = 'Cotizador soat';
        $data['page_functions_js'] = 'function_resumen_poliza.js';
        $data['page_header'] = 1;
        $this->views->getView($this, "resumen_poliza", $data);
    }
    
    
    public function InsertProducto(){
        $registro_p = new ProductosModel();
       

        $nombre =$_POST['nombre'];
        $numero_referencia =$_POST['numero_referencia'];
        $precio =$_POST['precio'];
        $peso =$_POST['peso'];
        $stock =$_POST['stock'];
        $fecha =$_POST['fecha'];
        $categoria =$_POST['categoria'];
                
        switch ($_POST["op"]) {
         case 'guardar':
            $respuesta = $registro_p->Guardar_Productos($nombre,$numero_referencia,$precio ,$peso,$stock,$fecha,$categoria);
            if ($respuesta) {
                $arrRespuesta = array('estado' => 'success' , 'mensaje' => 'Registro exitoso');
              
         } else { 
             $arrRespuesta = array('estado' => 'success', 'msg' => 'Regrstro fallo');
            
            }
             echo json_encode($arrRespuesta, JSON_UNESCAPED_UNICODE);
             break;
      }
      return $arrRespuesta;
    
   

    }   
  
}
