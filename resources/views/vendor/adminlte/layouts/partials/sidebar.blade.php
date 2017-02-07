<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
		
		        <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Frialsa Frigorificos </a>
                </div>
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
               
            </div>
        @endif


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
			<li class="treeview">
			     <a href="#"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <span>Actualizar CSV</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('Actualizar_Productos_Almacen')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i>Productos Almacen</a></li>
            <li class="treeview">
			     <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span>Recibo</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('Actualizar_Recibo/Maximo')}}"><i class="fa fa-plus-square" aria-hidden="true"></i>Maximo</a></li>
                    <li><a href="{{url('Actualizar_Recibo/Minimo')}}"><i class="fa fa-minus-square" aria-hidden="true"></i>Minimo</a></li>
                </ul>
            </li>
			<li class="treeview">
			     <a href="#"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <span>Embarque</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('Actualizar_Embarque/Maximo')}}"><i class="fa fa-plus-square" aria-hidden="true"></i>Maximo</a></li>
                    <li><a href="{{url('Actualizar_Embarque/Minimo')}}"><i class="fa fa-minus-square" aria-hidden="true"></i>Minimo</a></li>
                </ul>
            </li>
                </ul>
            </li>
			
			
		    
			
			
			
			
			<li class="treeview">
			     <a href="#"><i class="fa fa-cubes" aria-hidden="true"></i> <span>Lay Out</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  
            <li class="treeview">
			     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Bajio</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
				    <li><a href="{{url('layout/Querétaro, Qro')}}"><i class="fa fa-circle" aria-hidden="true"></i>Querétaro, Qro</a></li>
                    <li><a href="{{url('layout/Bajío I, Villagrán, Gto')}}"><i class="fa fa-circle" aria-hidden="true"></i>Bajío I, Villagrán, Gto</a></li>
					<li><a href="{{url('layout/Bajío II, Villagrán, Gto')}}"><i class="fa fa-circle" aria-hidden="true"></i>Bajío II, Villagrán, Gto</a></li>
					<li><a href="{{url('layout/Bajío II, Villagrán, Gto')}}"><i class="fa fa-circle" aria-hidden="true"></i>Irapuato, Gto</a></li>
					<li><a href="{{url('layout/Zamora, Mich')}}"><i class="fa fa-circle" aria-hidden="true"></i>Zamora, Mich</a></li>
                </ul>
            </li>
			<li class="treeview">
			     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Norte</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('layout/Monterrey, NL')}}"><i class="fa fa-circle" aria-hidden="true"></i>Monterrey, NL</a></li>
					<li><a href="{{url('layout/Monterrey ll, NL')}}"><i class="fa fa-circle" aria-hidden="true"></i>Monterrey ll, NL</a></li>
					<li><a href="{{url('layout/Colombia, NL')}}"><i class="fa fa-circle" aria-hidden="true"></i>Colombia, NL</a></li>
					<li><a href="{{url('layout/Laguna Torreón, Coah')}}"><i class="fa fa-circle" aria-hidden="true"></i>Laguna Torreón, Coah</a></li>
					<li><a href="{{url('layout/Culiacán, Sin')}}"><i class="fa fa-circle" aria-hidden="true"></i>Culiacán, Sin</a></li>
                </ul>
            </li>
			<li class="treeview">
			     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Occidente</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('layout/Aguascalientes, Ags')}}"><i class="fa fa-circle" aria-hidden="true"></i>Aguascalientes, Ags</a></li>
					<li><a href="{{url('layout/Guadalajara I, Jal')}}"><i class="fa fa-circle" aria-hidden="true"></i>Guadalajara I, Jal</a></li>
					<li><a href="{{url('layout/Guadalajara II, Jal')}}"><i class="fa fa-circle" aria-hidden="true"></i>Guadalajara II, Jal</a></li>
                </ul>
            </li>
			<li class="treeview">
			     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Tijuana</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('layout/Tijuana, BC')}}"><i class="fa fa-circle" aria-hidden="true"></i>Tijuana, BC</a></li>
                </ul>
            </li>
			<li class="treeview">
			     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Centro</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('layout/Cuautitlán I, Mex')}}"><i class="fa fa-circle" aria-hidden="true"></i>Cuautitlán I, Mex</a></li>
					<li><a href="{{url('layout/Cuautitlán II, Mex')}}"><i class="fa fa-circle" aria-hidden="true"></i>Cuautitlán II, Mex</a></li>
					<li><a href="{{url('layout/Tlalnepantla, Mex')}}"><i class="fa fa-circle" aria-hidden="true"></i>Tlalnepantla, Mex</a></li>
					<li><a href="{{url('layout/Ocoyoacac, Mex')}}"><i class="fa fa-circle" aria-hidden="true"></i>Ocoyoacac, Mex</a></li>
					<li><a href="{{url('layout/San Martín Obispo, Mex')}}"><i class="fa fa-circle" aria-hidden="true"></i>San Martín Obispo, Mex</a></li>
					<li><a href="{{url('layout/Tula, Hgo')}}"><i class="fa fa-circle" aria-hidden="true"></i>Tula, Hgo</a></li>
					<li><a href="{{url('layout/Tepeji del Río, Hgo')}}"><i class="fa fa-circle" aria-hidden="true"></i>Tepeji del Río, Hgo</a></li>
                </ul>
            </li>
			<li class="treeview">
			     <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Cancun</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('layout/Cancún, QR')}}"><i class="fa fa-circle" aria-hidden="true"></i>Cancún, QR</a></li>
                </ul>
            </li>
			
		
                </ul>
            </li>
			
			
			
			<li class="treeview">
			     <a href="#"><i style="font-size:15px;" class="fa fa-refresh fa-spin fa-3x fa-fw"></i></i> <span>Monitoreo de Planta</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('UsuariosNeutrino')}}"><i class="fa fa-circle" aria-hidden="true"></i>Usuarios</a></li>
                </ul>
            </li>
			
			
			<li class="treeview">
			     <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> <span> Administracion Neutrino</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('Usuarios')}}"><i class="fa fa-user" aria-hidden="true"></i>Usuarios</a></li>
					<li><a href="{{url('Clientes')}}"><i class="fa fa-users" aria-hidden="true"></i>Clientes</a></li>
                </ul>
            </li>
			
		
        </ul><!-- /.sidebar-menu -->
		
		
		
    </section>
    <!-- /.sidebar -->
</aside>
