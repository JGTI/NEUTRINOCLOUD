<!DOCTYPE html>
<html lang="en">
   @section('htmlheader')
   @include('adminlte::layouts.partials.htmlheader')
   @show
   <link href="../../css/LayOut.css" media="all" rel="stylesheet" type="text/css"/>
   <link href="../../css/Master.css" media="all" rel="stylesheet" type="text/css"/>
   <link type="image/x-icon" href="../../img/NeutrinoAzulSmall.png" rel="icon" />
   <link type="image/x-icon" href="../../img/NeutrinoAzulSmall.png" rel="shortcut icon" /> 
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
                        <h3 class="box-title"><i class="fa fa-exchange" aria-hidden="true"></i> Layout Region {{$Region}}, {{$Empresa}}</h3>
                        <div class="box-tools pull-right">
                           <button type="button" class="btn btn-box-tool"  data-toggle="tooltip" data-placement="top" title="Maximizar y Minimizar Layout" onclick="Max_Min();"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
                           <button type="button" class="btn btn-box-tool"  data-toggle="tooltip" data-placement="top" title="Imprimir Layout" onclick=javascript:window.print();><i class="fa fa-print" aria-hidden="true"></i></button>
                           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                     </div>
                     <!-- /.box-header -->
                     <div  id="Div_Conenido" class="box-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div id="LayOut" style ="overflow-x:scroll">
                                 <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                       <li class="active"><a href="#Producto" data-toggle="tab">Productos Almacen</a></li>
                                       <li><a href="#Cliente" data-toggle="tab">Estadisticos</a></li>
							  <div class="text-right">
		  <button type="button" onclick="window.location='{{url('Actualizar_Productos_Almacen')}}'" class="btn btn-morado pull-right" data-toggle="tooltip" data-placement="top" title="Actualizar el Archivo CSV para actualización de las vistas" style="margin-right: 5px;">
                 <i class="fa fa-cloud-upload" aria-hidden="true"></i> Actualizar CSV 
          </button>
</div>
									    
                                    </ul>
                                    <div class="tab-content">
                                       <div class="active tab-pane" id="Producto">
			
                                          @include('adminlte::layouts.LayOuts.Empresa.LayOuts.'.$Region.'.'.$Empresa.'')
										  
  
										  
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