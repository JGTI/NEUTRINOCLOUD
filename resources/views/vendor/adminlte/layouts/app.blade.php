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
                              <h3 class="box-title"><i class="fa fa-check-square-o" aria-hidden="true"></i> Panel de Control de Temperaturas </h3>
                              <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                           </div>
                           <!-- /.box-header -->
                       <div class="box-body">
				      <div style ="overflow-x:scroll">
                        <div class="row">
                          
                            @include('adminlte::layouts.Charts.Temperaturas.Temperaturas') 
                           </div>
                        </div>
                     </div>
                        </div>
                     </div>
					 
					 
					 
					 
					 <div class="col-md-6">
                        <div class="box">
                           <div class="box-header with-border">
                              <h3 class="box-title"><i class="fa fa-line-chart" aria-hidden="true"></i> Panel de Control Almacen</h3>
                              <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                           </div>
                           <!-- /.box-header -->
                           <div class="box-body">
                         <div class="col-md-12">
						    @include('adminlte::layouts.Charts.Almacen.Almacen') 
                          </div>
						   
                     </div>
                        </div>
                     </div>
					 
					 
					 
					 
					 
					 <div class="col-md-6">
                        <div class="box">
                           <div class="box-header with-border">
                              <h3 class="box-title"><i class="fa fa-line-chart" aria-hidden="true"></i> Panel de Control Almacen</h3>
                              <div class="box-tools pull-right">
                                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                 </button>
                                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                           </div>
                           <!-- /.box-header -->
                           <div class="box-body">
                         <div class="col-md-12">
						    
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