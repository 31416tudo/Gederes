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
    <title>Chef</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        @include ('templates/navbar')
        <!-- bloc-11 -->
        <div class="bloc bg-barranaranja bgc-white l-bloc" id="bloc-11">
            <div class="container bloc-xl">
                <div class="row">
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- bloc-11 END -->
        <!-- bloc-12 -->
        
            @include ('templates/orden', ['orden'=> $orden])

        <!-- bloc-12 END -->
        <!-- bloc-13 -->
        
        <!-- bloc-13 END -->
        <!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->
    </div>
    <!-- Main container END -->
</body>

</html>