<!DOCTYPE html>

<html lang="en">
   @section('htmlheader')
   @include('adminlte::layouts.partials.htmlheader')
   @show

   <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
   <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="js/fileinput.js" type="text/javascript"></script>
   <script src="js/fileinput_locale_fr.js" type="text/javascript"></script>
   <script src="js/fileinput_locale_es.js" type="text/javascript"></script>
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
                        <h3 class="box-title"><i class="fa fa-users" aria-hidden="true"></i> Administrar Usuarios </h3>
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
						    <div class="text-right">
						      <a href="{{url('Agregar_Usuario')}}" class="btn btn-morado" data-toggle="tooltip" data-placement="top" title="Formulario Para Agregar Un Nuevo Usuario A Neutrino"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar Usuario </a> 
                             </div>
                              <div style ="overflow-x:scroll">
							  <br>
                                 <table style="white-space: nowrap;font-size:80%;" id="myTable" class="table table-bordered table-hover dataTable tablepr" cellspacing="0" width="100%">
                                    <thead  class="btn-primary">
                                       <tr>
                                          <th>Nombre</th>
                                          <th>Email</th>
										  <th>Rol</th>
										  <th>Modificar</th>
										  <th>Eliminar</th>
                                       </tr>
                                    </thead>
                                 </table>
                                 <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
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
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <script src="plugins/datatables/jquery.dataTables.min.js"></script>
   <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
   <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
   <script src="plugins/fastclick/fastclick.js"></script>
   <script src="dist/js/app.min.js"></script>
   <script src="dist/js/demo.js"></script>
   <script>	
      $(document).ready(function() {
          $('#myTable').DataTable( {
              "processing": true,
              "serverSide": true,
              "ajax": "/api/UsuariosNeutrino",
      		"columns":[   
      	   {data:'name'},
      	   {data:'email'},
		   {data:'rol'},
		   {data:'id'},
		   {data:'id'},
      		]
          } );
      } );
   </script>	
</html>