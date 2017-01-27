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
	  
	  
		 @include('adminlte::layouts.Alerts.AlertsAgregarUsuario')
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
                                 <a href="{{url('UsuariosNeutrino')}}" class="btn btn-morado" data-toggle="tooltip" data-placement="top" title="Gestionar Usuarios Actuales De Neutrino"><i class="fa fa-plus-square" aria-hidden="true"></i> Administrar Usuarios </a> 
                              </div>
                              <div>
                                 <br>
								  <form action="{{ url('/Nuevo_Usuario_Neutrino') }}" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                 <div class="col-lg-6">
                                    <h5>Nombre</h5>
                                    <div class="input-group">
                                       <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                       <input type="text" id="nombre" name="nombre" class="form-control" required/>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <h5>Email</h5>
                                    <div class="input-group">
                                       <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                       <input type="mail" id="email" name="email" class="form-control" required />
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <h5>Password</h5>
                                    <div class="input-group">
                                       <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                       <input type="password" id="password" name="password" class="form-control" required/>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <h5>Frialsa</h5>
                                    <div class="input-group">
									   <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									   <select id="empresa" name="empresa" class="form-control" required>
									          <option value="">Seleccione...</option>
									       @foreach($Empresas_Region_User as $empresa)
			                                  <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
										   @endforeach
										 </select>
                                     
                                      
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <h5>Rol</h5>
                                    <div class="input-group">
                                       <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                       <select id="rol" name="rol" class="form-control" required>
									         <option value="">Seleccione...</option>
									       @foreach($Roles as $rol)
			                                  <option value="{{$rol->id}}">{{$rol->nombre}}</option>
										   @endforeach
										 </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="text-right">
                                       <br>
                                       <button class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> Guardar</button> 
                                    </div>
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