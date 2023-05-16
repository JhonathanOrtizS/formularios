<div class="content-wrapper" style="min-height: 815px;">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Blog</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="http://localhost/eva180-v2/public">Inicio</a></li>

            <li class="breadcrumb-item active">Configuración</li>

          </ol>

        </div>

      </div>

    </div><!-- /.container-fluid -->

  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">

      <div class="row">

        <div class="col-12">

          <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="PUT">
            
            <input type="hidden" name="_token" value="Kb9RlbfXPNfeXsbkfQyL3W0S1fBKsHLFYh3YbZ5p">
            <!-- Default box -->
            <div class="card">

              <div class="modal-header bg-dark">

                <h4 class="modal-title">Configuración de Conexión </h4>

              </div>

              <div class="card-body">
               
                <div class="row">
                  
                  <div class="col-lg-7">
                    
                      <div class="card">

                        <div class="card-body">

                          

                          <div class="input-group mb-3">

                            <div class="input-group-append">

                              <span class="input-group-text">Dominio</span>

                            </div>

                            <input type="text" class="form-control" name="dominio" value="http://localhost/sis-eva/" required="">

                          </div>

                          

                          <div class="input-group mb-3">
                            
                            <div class="input-group-append">
                              
                              <span class="input-group-text">Servidor</span>

                            </div>

                            <input type="text" class="form-control" name="servidor" value="http://localhost/sis-eva/-cms/public/" required="">

                          </div>

                          

                          <div class="input-group mb-3">
                            
                            <div class="input-group-append">
                              
                              <span class="input-group-text">Título</span>

                            </div>

                            <input type="text" class="form-control" name="titulo" value="EVA-180" required="">

                          </div>

                          <hr class="pb-2">

                        </div>

                      </div>

                  </div>

                  <div class="col-lg-5">
                    
                    <div class="card">

                      <div class="card-body">
                
                        <div class="row">
                          
                          <div class="col-lg-12">
                              
                            

                            <div class="form-group my-2 text-center">
                              
                              <div class="btn btn-default btn-file mb-3">
                                
                                <i class="fas fa-paperclip" aria-hidden="true"></i> Adjuntar Imagen de Logo

                                <input type="file" name="logo">

                                <input type="hidden" name="logo_actual" value="vistas/img/logo-eva.png">

                              </div>

                              <br>

                              <img src="img/logo-eva.png" class="img-fluid img-icono py-2 bg-secondary previsualizarImg_logo">

                              <p class="help-block small mt-3">Dimensiones: 700px * 200px | Peso Max. 2MB | Formato: JPG o PNG</p>

                            </div>

                            <hr class="pb-2">

                          </div>

                        </div>
                          
                      </div>
          
                    </div>
                    
                  </div>

                </div>

              </div>

              <!-- /.card-body -->
              <div class="card-footer">

                 <button type="submit" class="btn btn-primary float-right bg-dark">Guardar cambios</button>

              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

          </form>

        </div>

      </div>

    </div>

  </section>
  <!-- /.content -->
</div>