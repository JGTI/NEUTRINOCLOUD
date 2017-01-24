<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">
   @section('htmlheader')
   @include('adminlte::layouts.partials.htmlheader')
   @show
   <!--
      BODY TAG OPTIONS:
      =================
      Apply one or more of the following classes to get the
      desired effect
      |---------------------------------------------------------|
      | SKINS         | skin-blue                               |
      |               | skin-black                              |
      |               | skin-purple                             |
      |               | skin-yellow                             |
      |               | skin-red                                |
      |               | skin-green                              |
      |---------------------------------------------------------|
      |LAYOUT OPTIONS | fixed                                   |
      |               | layout-boxed                            |
      |               | layout-top-nav                          |
      |               | sidebar-collapse                        |
      |               | sidebar-mini                            |
      |---------------------------------------------------------|
      -->
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
        
		@include('adminlte::layouts.Alerts.AlertsCSVRecibo')
		 
         <!-- Main content -->
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box">
                     <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-share-square-o" aria-hidden="true"></i> Actualizar CSV Recibo {{$tipo}} </h3>
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
                              <form action="{{url('importCSVRecibo')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                 {{ csrf_field() }}
                                 <input  id="file-0d" type="file" class="file" name="import_file" />
								 <input  type="hidden" name="tipo" value="{{$tipo}}" class="file"/>
                              </form>
                              <br/>
                              <div style ="overflow-x:scroll">
                                 <table style="white-space: nowrap;font-size:80%;" id="myTable" class="table table-bordered table-hover dataTable tablepr" cellspacing="0" width="100%">
                                    <thead  class="btn-primary">
                                       <tr>
                                          <th>Cliente</th>
                                          <th>Numero de Recibo</th>
                                          <th>Referencia del recibo</th>
                                          <th>Cantidad Recibida</th>
                                          <th>Fecha de Proceso</th>
                                          <th>Tipo de Unidad</th>
                                          <th>Agranel / Paletizado</th>
                                          <th>Cant y Tipo Tar</th>
                                          <th>Inb / Outb</th>
                                          <th>Operador</th>
                                          <th>Fecha y Hora</th>
                                          <th>Flujo del proceso</th>
                                          <th>Sellos 1</th>
                                          <th>Sellos 2</th>
                                          <th>Temp Frente</th>
                                          <th>Temp Medio</th>
                                          <th>Temp Atrás</th>
                                          <th>Temp Promedio</th>
                                          <th>Nombre Chofer</th>
                                          <th>Transporte</th>
                                       </tr>
                                    </thead>
										<tbody>
									 @foreach($Recibo as $recibo)
                                           <tr>
			                                  <td>{{$recibo->Cliente}}</td>
											  <td>{{$recibo->NumerodeRecibo}}</td>
											  <td>{{$recibo->ReferenciaRecibo}}</td>
											  <td>{{$recibo->CantidadRecibida}}</td>
											  <td>{{$recibo->FechadeProceso}}</td>
											  <td>{{$recibo->TipodeUnidad}}</td>
											  <td>{{$recibo->AgranelPaletizado}}</td>
											  <td>{{$recibo->CantTipoTar}}</td>
											  <td>{{$recibo->InbOutb}}</td>
											  <td>{{$recibo->Operador}}</td>
											  <td>{{$recibo->FechaHora}}</td>
											  <td>{{$recibo->FlujoProceso}}</td>
											  <td>{{$recibo->Sellos1}}</td>
											  <td>{{$recibo->Sellos2}}</td>
											  <td>{{$recibo->TempFrente}}</td>
											  <td>{{$recibo->TempMedio}}</td>
											  <td>{{$recibo->TempAtrás}}</td>
											  <td>{{$recibo->TempPromedio}}</td>
											  <td>{{$recibo->Nombrecibohofer}}</td>
											  <td>{{$recibo->Transporte}}</td>
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