@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Password recovery
@endsection

@section('content')
    <link type="image/x-icon" href="../img/NeutrinoAzulSmall.png" rel="icon" />
    <link type="image/x-icon" href="../img/NeutrinoAzulSmall.png" rel="shortcut icon" /> 
<body class="login-page">
    <div id="app">

        <div class="login-box">
        <div class="login-logo">
           <div class="user-panel login-logo">
                <div class="pull-left image">
                    <img src="../img/NeutrinoAzulGrande.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info image">
                    <strong>NEUTRINO 4.0 </strong>
                </div>
            </div>
        </div><!-- /.login-logo -->

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

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
            <p class="login-box-msg"><i class="fa fa-gears" aria-hidden="true"></i> Recuperar Contraseña</p>
            <form action="{{ url('/password/email') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                    <div class="col-xs-8">
                        <button type="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-plane" aria-hidden="true"></i> Enviarme la Contraseña</button>
                    </div><!-- /.col -->
                    <div class="col-xs-2">
                    </div><!-- /.col -->
                </div>
            </form>

            <a href="{{ url('/login') }}"><i class="fa fa-share-square" aria-hidden="true"></i> Entrar</a><br>
            <!--a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a-->

			
			 <div class="user-panel login-logo">
                <div class="pull-left image">
                    <img src="../img/FrialsaAzulGrande.png" class="img-circle" alt="User Image" />
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
