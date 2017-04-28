<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=helvetica&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/blocs.min.js"></script>
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/formHandler.js"></script>
    <title>Log-In</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-0 -->
            @include ('templates/navbar')
        <!-- bloc-0 END -->
        <!-- bloc-3 -->
        <div class="bloc bgc-white l-bloc" id="bloc-3">
            <div class="container bloc-lg">
                <div class="row login">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="mg-clear">Log In</h3>
                            </div>
                            <div class="panel-body">
                                <form id="form_1" role="form" method="POST" action="{{ route('login') }}" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Ingresa el Usuario de la Mesa
                            <br>
                            </label>
                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required >
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label>Ingresa la clave de acceso
                            <br>
                            </label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="fix">
                            <div class="form-group">
                                <div class="col-md-3 ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-1 ">
                                    <button type="submit" class="btn btn-lg btn-rd btn-wire wire-btn-light-salmon" style="background: #ffffff;">
                                        Entrar
                                    </button>

                                </div>
                            </div>
                        </div>      
                    </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-3 END -->
    </div>
    <!-- Main container END -->
</body>

</html>
