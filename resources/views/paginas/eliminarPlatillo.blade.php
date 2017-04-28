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
    <title>ActualizarPlatillo</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-15 -->
        <div class="bloc bgc-white l-bloc" id="bloc-15">
            <div class="container bloc-md">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="{{route('eliminado')}}" method="post" id="form_18266" novalidate>
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}                                                    
                                                    <div class="form-group">
                                                        <label>Nombre del Platillo a eliminar<br></label>
                                                        @include('templates/showPlatillo', ['platillos'=>$platillos])
                                                    </div>                                            
                                                        <div class="text-center"><button type="submit" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Eliminar</button></div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-15 END -->
        <!-- bloc-16 -->
        <div class="bloc bgc-white l-bloc" id="bloc-16">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </div>
        <!-- bloc-16 END -->
    </div>
    <!-- Main container END -->
</body>

</html>
