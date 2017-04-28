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
    <title>Menu</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-0 -->
        @include ('templates/navbar')
        <!-- bloc-0 END -->
        <!-- bloc-4 -->
        <div class="bloc bg-barranegra2 bgc-white l-bloc" id="bloc-4">
            <div class="container bloc-xxl">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- bloc-4 END -->
        <!-- bloc-5 -->
        <div class="bloc l-bloc bgc-white" id="bloc-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center"><a class="btn btn-lg btn-rd btn-wire wire-btn-light-salmon" data-toggle="modal" data-target="#AgregarPl">Agregar Platillo</a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center"><a href="{{route('actualizarPlatillo')}}" class="btn btn-lg btn-rd btn-wire wire-btn-light-salmon" data-toggle="modal" data-target="#ModificarPl">Modificar Platillo</a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center"><a href="{{route('eliminarPlatillo')}}" class="btn btn-lg btn-rd btn-wire wire-btn-light-salmon" data-toggle="modal" data-target="EliminarPl">Eliminar Platillo</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-5 END -->
        <!-- bloc-6 -->
        <div class="bloc bgc-white l-bloc" id="bloc-6">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="mg-md text-center tc-dark-red">MENU</h1>
                        <div>
                            <div class="row">
                                 @include ('templates/menu', ['platillos'=>$platillos])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-10 END -->
        <!-- bloc-11 -->
        <div class="bloc l-bloc bgc-white" id="bloc-11">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-12">

                        <form class="form-group" action="{{route('ordenenviada')}}" method="post">
                        {{ csrf_field() }}   
                            <div class="form-group">
                                <label>Comentarios<br><br></label>
                                <textarea class="form-control" rows="4" cols="50" id="textarea_229" placeholder="Ingresa comentarios"></textarea>
                            
                            
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-d btn-lg">Enviar Orden</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-11 END -->
    </div>
    <!-- Main container END -->
     <!-- Modal 1-->
<div id="AgregarPl" class="modal fade" role="dialog">
  <div class="modal-dialog">
         @include('templates/agregarplatillo',['ingredientes'=>$ingredientes])
  </div>
</div>
        <!-- Modal 2-->
<div id="EditarPl" class="modal fade" role="dialog">
  <div class="modal-dialog">
         
  </div>
</div>
        <!-- Modal 3-->
<div id="EliminarPl" class="modal fade" role="dialog">
  <div class="modal-dialog">
      
  </div>
</div>
</body>

</html>