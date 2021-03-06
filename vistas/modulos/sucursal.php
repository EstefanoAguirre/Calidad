<div class="content-wrapper">
    
  <section class="content-header">
      
    <h1>
      Gestor Sucursal
    </h1>
 
    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Gestor Sucursal</li>
      
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
         
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSucursal">

            Registrar Sucursal

          </button>

      </div>

      <div class="box-body">
         
        <table class="table table-bordered table-striped dt-responsive tablaSucursal" width="100%">

          <thead>
            
            <tr>
              
              <th style="width:10px">#</th>
              <th>Empresa</th>
              <th>Sector Economico</th>
              <th>Dirección</th>
              <th>Distrito</th>
              <th>Fecha</th>
              
            </tr>

          </thead>

        </table> 

      </div>
        
    </div>

  </section>

</div>




<!--=====================================
MODAL AGREGAR EMPRESA
======================================-->

<div id="modalAgregarSucursal" class="modal fade" role="dialog">
  
  <div class="modal-dialog">
    
    <div class="modal-content">

      <form method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
        
        <div class="modal-header" style="background:#3c8dbc; color:white">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <h4 class="modal-title">Agregar Sucursal</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">
          
          <div class="box-body">

           <!--=====================================
            AGREGAR EMPRESA
            ======================================-->

            <div class="form-group">
                
                <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                  <select class="form-control input-lg seleccionarEmpresa">
                  
                    <option value="">Selecionar empresa</option>

                    <?php

                    $item = null;
                    $valor = null;

                    $empresa = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);
                    foreach ($empresa as $key => $value) {
                      
                      echo '<option value="'.$value["idEmpresa"].'">'.$value["nombre"].'</option>';
                    }

                    ?>

                  </select>

                </div>

            </div>
            

            
            
            <!--=====================================
            AGREGAR SECTOR ECONOMICO
            ======================================-->

            <div class="form-group  entradaSectorEconomico" style="display:none">
              
               <div class="input-group">
              
                  <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                  <input type="text" class="form-control input-lg validarEmpresa sectorEmpresa" name="sectorEmpresa"> 
            

                </div>

            </div>
            

            <!--=====================================
            ENTRADA DE LA DIRECCION DE LA SUCURSAL
            ======================================-->

            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <input type="text" class="form-control input-lg direccionSucursal" placeholder="Ingresar dirección" name="direccionSucursal" required> 

              </div> 

            </div>
            

            


          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">
          
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Registrar Sucursal</button>

        </div>

      </form>



    </div>

  </div>

</div>


