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
			     <a href="#"><i class='fa fa-link'></i> <span>Actualizar CSV</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('Actualizar_Productos_Almacen')}}"><i class='fa fa-link'></i>Productos Almacen</a></li>
            <li class="treeview">
			     <a href="#"><i class='fa fa-link'></i> <span>Recibo</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('Actualizar_Recibo/Maximo')}}"><i class='fa fa-link'></i>Maximo</a></li>
                    <li><a href="{{url('Actualizar_Recibo/Minimo')}}"><i class='fa fa-link'></i>Minimo</a></li>
                </ul>
            </li>
			<li class="treeview">
			     <a href="#"><i class='fa fa-link'></i> <span>Embarque</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class='fa fa-link'></i>Maximo</a></li>
                    <li><a href="#"><i class='fa fa-link'></i>Minimo</a></li>
                </ul>
            </li>
                </ul>
            </li>
			
			
		    
			
			
			
			
			<li class="treeview">
			     <a href="#"><i class='fa fa-link'></i> <span>Lay Out</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  
            <li class="treeview">
			     <a href="#"><i class='fa fa-link'></i> <span>Bajio</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('Ver_layOut')}}"><i class='fa fa-link'></i>Villagran II</a></li>
                </ul>
            </li>
		
                </ul>
            </li>
			
			
			
			<li class="treeview">
			     <a href="#"><i class='fa fa-link'></i> <span>Administrar Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('UsuariosNeutrino')}}"><i class='fa fa-link'></i>Usuarios</a></li>
                </ul>
            </li>
			
			
			
			
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="{{url('HighChartsJS')}}"><i class='fa fa-link'></i> <span>HighCharts</span></a></li>
            <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
