<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">{{ trans('adminlte_lang::message.recentactivity') }}</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                        <div class="menu-info">
                            <h4 class="control-sidebar-subheading">{{ trans('adminlte_lang::message.birthday') }}</h4>
                            <p>{{ trans('adminlte_lang::message.birthdaydate') }}</p>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">{{ trans('adminlte_lang::message.progress') }}</h3>
            <ul class='control-sidebar-menu'>
                <li>
                    <a href='javascript::;'>
                        <h4 class="control-sidebar-subheading">
                            {{ trans('adminlte_lang::message.customtemplate') }}
                            <span class="label label-danger pull-right">70%</span>
                        </h4>
                        <div class="progress progress-xxs">
                            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                        </div>
                    </a>
                </li>
            </ul><!-- /.control-sidebar-menu -->

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">{{ trans('adminlte_lang::message.statstab') }}</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
		 <h3 class="control-sidebar-heading"><i class="fa fa-star" aria-hidden="true"></i> Panel de Control de Alertas</p></h3>
         <button onclick="parar();" class="btn btn-danger form-control"><i class="fa fa-volume-off" aria-hidden="true"></i> Silenciar Alertaas        </button>
		 <button onclick="reproducir(this.value);" value="Amoniaco" class="btn btn-info form-control"><i class="fa fa-volume-off" aria-hidden="true"></i> Probar Alerta Amoniaco    &nbsp;</button>
		 <button onclick="reproducir(this.value);" value="Temperatura" class="btn btn-warning form-control"><i class="fa fa-volume-off" aria-hidden="true"></i> Probar Alerta Temperatura</button>
		 <button onclick="reproducir(this.value);" value="Mensaje" class="btn btn-success form-control"><i class="fa fa-volume-off" aria-hidden="true"></i> Probar Alerta Información</button>
        </div><!-- /.tab-pane -->
    </div>
</aside><!-- /.control-sidebar

<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class='control-sidebar-bg'></div>