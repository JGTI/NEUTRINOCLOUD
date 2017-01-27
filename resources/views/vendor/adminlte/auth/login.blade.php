@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app">
        <div class="login-box">
            
			

      
		
		<div class="user-panel login-logo">
                <div class="pull-left image">
                    <img src="img/NeutrinoAzulGrande.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info image">
                    <strong>NEUTRINO 4.0 </strong>
                </div>
        </div>
			
	    @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
		
			<p class="login-box-msg"><i class="fa fa-key" aria-hidden="true"></i> Iniciar Secion</p>
			
			
        
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" required/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password" required/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> Recordar
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-share-square" aria-hidden="true"></i>  Entrar</button>
                </div><!-- /.col -->
            </div>
        </form>

   

        <a href="{{ url('/password/reset') }}"><i class="fa fa-search" aria-hidden="true"></i>  Olvide mi Contraseña</a><br>
        <!--a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a-->

		
		   <div class="user-panel login-logo">
                <div class="pull-left image">
                    <img src="img/FrialsaAzulGrande.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info image">
                   <h6>Frialsa Frigorificos S.A de C.V Soluciones Logisticas Para la Cadena de Frio.<h6>
                </div>
            </div>
			
    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
    </div>
    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
