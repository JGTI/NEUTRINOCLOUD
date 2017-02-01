<!DOCTYPE html>

<html lang="en">
   @section('htmlheader')
   @include('adminlte::layouts.partials.htmlheader')
   @show

<link href="../css/LayOut.css" media="all" rel="stylesheet" type="text/css"/>
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
                        <h3 class="box-title"><i class="fa fa-exchange" aria-hidden="true"></i> Layout </h3>
                        <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool"  onclick=javascript:window.print();><i class="fa fa-print" aria-hidden="true"></i></button>
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                        <div class="row">
                           <div class="col-md-12">
						
						<div id="LayOut" style ="overflow-x:scroll">
	
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#Producto" data-toggle="tab">Productos Almacen</a></li>
              <li><a href="#Cliente" data-toggle="tab">Estadisticos</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="Producto">
              @include('adminlte::layouts.LayOuts.Empresa.LayOuts.Frialsa Villagran II')
              </div>
              <div class="tab-pane" id="Cliente">
               @include('adminlte::layouts.LayOuts.Empresa.Graficas.Estadisticos')
              </div>
            </div>
          </div>
     
						       
                              
                                 
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