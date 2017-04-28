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
    <title>Almacen</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        @include ('templates/navbar')
        <br>
          <div class="bloc l-bloc bgc-white" id="bloc-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="text-center"><a href="" class="btn btn-lg btn-rd btn-wire wire-btn-light-salmon"  data-toggle="modal" data-target="#AgregarIn">Agregar Ingrediente</a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center"><a href="" class="btn btn-lg btn-rd btn-wire wire-btn-light-salmon "  data-toggle="modal" data-target="#EditarIn">Modificar Ingrefiente</a></div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center"><a href="" class="btn btn-lg btn-rd btn-wire wire-btn-light-salmon" data-toggle="modal" data-target="#EliminarIn">Eliminar Ingrediente</a></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- bloc-12 -->
        <form action="{{route('ingredienteinsertado')}}" method="post">
        {{ csrf_field() }}
            <table style="width:70%" align="center">
                <tr>
                    <td> <input type='text' name='nombreIngrediente' id='nombreIngrediente' placeholder="Inserta el ingrediente"> </td>
                    <td> <input box-sizing="border-box" width="100%" type='text' name='cantidad' id='cantidad' placeholder="Inserta la cantidad"></td>
                    <td> <button type="submit" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Insertar</button> </td>
                <tr>
            </table>
        </form>
        <form action="{{route('almacen')}}" method="post">
            <table style="width:70%" align="center">
                <tr>
                    <th> Nombre </th>
                    <th> Cantidad </th>
                <tr>
                @include ('templates/ingrediente', ['ingredientes'=>$ingredientes])
            </table>
        </form>

        <!-- bloc-12 END -->
        <!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->
    </div>
    <!-- Main container END -->
    
    
    
    <!-- Modal 1-->
<div id="AgregarIn" class="modal fade" role="dialog">
  <div class="modal-dialog">
         @include ('templates/agregaringrediente')
  </div>
</div>
        <!-- Modal 2-->
<div id="EditarIn" class="modal fade" role="dialog">
  <div class="modal-dialog">
         @include ('templates/modificaringrediente')
  </div>
</div>
        <!-- Modal 3-->
<div id="EliminarIn" class="modal fade" role="dialog">
  <div class="modal-dialog">
      @include ('templates/eliminaringrdiente')
  </div>
</div>


</body>

</html>