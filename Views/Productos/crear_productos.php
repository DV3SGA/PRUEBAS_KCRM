<?php
headerAdmin($data);
?>
<style>
.label-radio {
    float: left;
    display: inline-block;
    margin: 6px;
    font-size: 20px;
}

.label-radio1 {
    font-size: 20px;
    float: left;
    display: inline-block;
    width: 50%;
}

.radius-input {
    width: 20px;
    height: 20px;
    margin-right: 9px;
}

.btn-enviar {
    border-radius: 20px 20px 20px 20px;
    width: 135px;
}

.btn-inputs {
    width: 39px;
    border-radius: 50%;
    margin-right: 15px;
    background-color: #67b5fb;
    vertical-align: middle;
    text-justify: auto;
}

.fa-4x {
    font-size: 25px;
    color: white;
    padding-top: 6px;
}

.form-control {
    border-radius: 8px 8px 8px 8px;
}

.sinborde {
    border: none;
    outline: 0px;
}

.conborde {
    /* border-color: rgb(255, 144, 0); */
    border-color: orange;
    outline: 0px;
}

.linea {
    display: inline-block;
}

/*  */
.capt {
    background-color: grey;
    width: 300px;
    height: 100px;

}

#mainCaptcha {
    position: relative;
    left: 60px;
    top: 5px;

}

#refresh {
    position: relative;
    left: 230px;
    width: 30px;
    height: 30px;
    bottom: 45px;
    background-image: url(rpt.jpg);
}

#txtInput,
#Button1 {
    position: relative;
    left: 40px;
    bottom: 40px;
}

/*  */
</style>
<div id="cover-spin"></div>
<div id="contentAjax"></div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Productos</h1>
                </div>
            </div>  
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form method="POST" class="login-form" id="f_producto" name="f_producto" action="f_producto">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Crear Productos</h3>
                            </div>
                            <div class="card-body">

                            <input class="text-center" type="datetime" name="fecha" id="fecha"  value="<?php echo date("Y-m-d");?>">
                               
                            <div class="row">
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label class="col-sm-4 col-form-label">Nombre producto:</label>
                                        <input type="text" class="form-control"  id="nombre" name="nombre"
                                            placeholder="Nombre Productos" text-center>
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group ">
                                        <label class="col-sm-4 col-form-label"># Referencia:</label>
                                        <input type="text" class="form-control"  id="numero_referencia"
                                            name="numero_referencia" placeholder="Referencia" text-center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label class="col-sm-4 col-form-label">Presio Producto:</label>
                                        <input type="text" class="form-control"  id="precio" name="precio"
                                            placeholder="Presio Producto" text-center>
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group ">
                                        <label class="col-sm-4 col-form-label">Peso:</label>
                                        <input type="text" class="form-control"  id="peso" name="peso"
                                            placeholder="Peso Productos" text-center>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label class="col-sm-4 col-form-label">Stock:</label>
                                        <input type="text" class="form-control"  id="stock" name="stock"
                                            placeholder="Stock" text-center>
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <label class="col-sm-12 col-form-label">Categoria del Producto:</label>
                                        <input type="text" class="form-control"  id="categoria" name="categoria"
                                            placeholder="Stock" text-center>
                                    </div>

                                </div>

                                <div class="form-group mt-3" style="overflow:auto;">

                                    <div style="float:center" class="text-center" >
                                        <button type="submit" id="guardar_producto"
                                            class="btn btn-enviar btn-success ">GUARDAR</button>
                                    </div>

                                </div>


                                <!-- /.captcha -->


                            </div>
                            <!-- /.form group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </section>

    </form>
    <!-- /.container -->
</div>

<?php footerAdmin($data); ?>