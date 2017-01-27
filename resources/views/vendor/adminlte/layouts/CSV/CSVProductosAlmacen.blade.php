<!DOCTYPE html>

<html lang="en">
   @section('htmlheader')
   @include('adminlte::layouts.partials.htmlheader')
   @show
  
   <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
   
   <link href="../css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="../js/fileinput.js" type="text/javascript"></script>
   <script src="../js/fileinput_locale_fr.js" type="text/javascript"></script>
   <script src="../js/fileinput_locale_es.js" type="text/javascript"></script>
   
   <body class="skin-blue sidebar-mini">
      <div id="app">
      <div class="wrapper">
	  
      @include('adminlte::layouts.partials.mainheader')
      @include('adminlte::layouts.partials.sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
		@include('adminlte::layouts.Alerts.AlertsCSVProductosAlmacen')
		 
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box">
                     <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-share-square-o" aria-hidden="true"></i> Actualizar CSV Productos Almacen  </h3>
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
						    
                              <h5><i class="fa fa-file-excel-o" aria-hidden="true"></i> Importar Archivo:</h5>
                              <form action="{{url('importCSVProductosAlmacen')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                 <input  id="file-0d" type="file" class="file" name="import_file" data-toggle="tooltip" data-placement="top" title="Gestionar Usuarios Actuales De Neutrino"/>
                              </form>
                              <br/>
                              <div style ="overflow-x:scroll">
                                 <table style="white-space: nowrap;font-size:80%;" id="myTable" class="table table-bordered table-hover dataTable tablepr" cellspacing="0" width="100%">
                                    <thead  class="btn-primary">
                                       <tr>
                                          <th>Cliente</th>
										  <th>Producto</th>
										  <th>Descripcion de Producto</th>
										  <th>Ubicacion</th>
										  <th>F. Caducidad</th>
										  <th>Lote Cliente</th>
										  <th>L. Tarima</th>
										  <th>En Preparacion</th>
										  <th>En Recibo</th>
										  <th>Cantidad Retenida</th>
										  <th>Codigo de Retencion</th>
										  <th>Cantidad Disponible</th>
										  <th>Cantidad Total</th>
										  <th>Fecha de Recibo</th>
										  <th>Entrada</th>
                                       </tr>
                                    </thead>
									
										<tbody>
									 @foreach($Productos as $PAlmacen)
                                           <tr>
			                                  <td>{{$PAlmacen->Cliente}}</td>
											  <td>{{$PAlmacen->Producto}}</td>
											  <td>{{$PAlmacen->DescripciondeProducto}}</td>
											  <td>{{$PAlmacen->Ubicacion}}</td>
											  <td>{{$PAlmacen->FCaducidad}}</td>
											  <td>{{$PAlmacen->LoteCliente}}</td>
											  <td>{{$PAlmacen->LTarima}}</td>
											  <td>{{$PAlmacen->EnPreparacion}}</td>
											  <td>{{$PAlmacen->EnRecibo}}</td>
											  <td>{{$PAlmacen->CantidadRetenida}}</td>
											  <td>{{$PAlmacen->CodigodeRetencion}}</td>
											  <td>{{$PAlmacen->CantidadDisponible}}</td>
											  <td>{{$PAlmacen->CantidadTotal}}</td>
											  <td>{{$PAlmacen->FechadeRecibo}}</td>
											  <td>{{$PAlmacen->Entrada}}</td>
											</tr>
										 @endforeach
								   </tbody>
                                 </table>
                                 <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
                                 <div>
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
   <script src="../bootstrap/js/bootstrap.min.js"></script>
   <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
   <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
   <script src="../plugins/fastclick/fastclick.js"></script>
   <script src="../dist/js/app.min.js"></script>
   <script src="../dist/js/demo.js"></script>
   <script>	
   
$(document).ready(function(){
    $('#myTable').DataTable();
})
   </script>	
</html>