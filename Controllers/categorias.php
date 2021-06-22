<?php

class Categorias extends Controllers

{
    public function __construct()
    {
        parent::__construct();
    }

    public function CrearCategoria()
    {

        $data['page_id'] = 1;
        $data['page_tag'] = 'Crear Categoria';
        $data['page_title'] = 'Crear Categoria';
        $data['page_functions_js'] = 'function_categorias.js';
        $data['page_header'] = 1;
        $this->views->getView($this, "crear_categorias", $data);
    }


    public function ResumenCategoria()
    {
        $data['page_id'] = 1;
        $data['page_tag'] = 'Resumen Categoria';
        $data['page_title'] = 'Cotizador soat';
        $data['page_functions_js'] = 'function_resumen_poliza.js';
        $data['page_header'] = 1;
        $this->views->getView($this, "resumen_poliza", $data);
    }


    public function InsertCategoria(){
        $registro_c = new CategoriasModel();

        $nombre_categoria =$_POST['categoria'];
        $descripcion =$_POST['descripcion'];
                
        switch ($_POST["op"]) {
         case 'guardar':
            $respuesta = $registro_c->Guardar_Categorias($nombre_categoria,$descripcion );
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