<!DOCTYPE html>

<html lang="en">
   @section('htmlheader')
   @include('adminlte::layouts.partials.htmlheader')
   @show

   <body class="skin-blue sidebar-mini">
      <div id="app">
      <div class="wrapper">
	  
      @include('adminlte::layouts.partials.mainheader')
      @include('adminlte::layouts.partials.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
	
		 
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box">
                     <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-warning" aria-hidden="true"></i> Test de Alertas </h3>
                        <div class="box-tools pull-right">
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div>
							  <br>
                                 <form action="{{url('Test_Activar_Alarma')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                 <div class="col-md-6">
								 <button type="file" name="Alarma" value="1" class="form-control btn btn-info"><i aria-hidden="true" class="fa fa-volume-off"></i> Alarma Amoniaco</button>
								 </div>
								
								 
								 <div class="col-md-6">
								 <button type="file" name="Alarma" value="5" class="form-control btn btn-warning"><i aria-hidden="true" class="fa fa-volume-off"></i> Alarma Electricidad</button>
								 </div>
								 
								
								 
								 <div class="col-md-6">
								 <button type="file" name="Alarma" value="2" class="form-control btn btn-primary"><i aria-hidden="true" class="fa fa-volume-off"></i> Alarma Temperatura</button>
                                 </div>
								 
								 <div class="col-md-6">
								 <button type="file" name="Alarma" value="0" class="form-control btn btn-danger"><i aria-hidden="true" class="fa fa-volume-off"></i> Desactivar Alarmas</button>
								 </div>
							  </form>
                    
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- /.box-footer -->
                  </div>
                  <!-- Your Page Content Here -->
         </section>
         <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         @include('adminlte::layouts.partials.controlsidebar')
         @include('adminlte::layouts.partials.footer')
         </div>
         <!-- ./wrapper -->
      </div>
      @section('scripts')
      @include('adminlte::layouts.partials.scripts')
      @show
   </body>
</html>