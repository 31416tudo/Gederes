<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=helvetica&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/blocs.min.js"></script>
    <title>Home</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <div class="page-container">
        @include ('templates/navbar')
        <!-- bloc-1 -->
        <div class="bloc bg-Fondo b-parallax bgc-white l-bloc bloc-fill-screen" id="bloc-1">
            <div class="container">
                <div class="row principal">
                    <div class="col-sm-12">
                        <h1 class="mg-md  tc-white animated vanishIn animSpeedLazy">JERLAP Restaurant-Bar</h1>
                        <h3 class="mg-md  tc-white animDelay02 animated vanishIn animSpeedLazy">Descubre el sabor<br></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-1 END -->
        <!-- bloc-2 -->
        <div class="bloc b-parallax bg-Fondo bgc-white l-bloc full-width-bloc" id="bloc-2">
            <div class="container">
                <div class="row fadded row-no-gutters hidden-xs">
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- bloc-2 END -->
        <!-- ScrollToTop Button --><a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->
        <!-- Footer - bloc-11 -->
        <div class="bloc bg-barranegra hidden-xs bgc-white l-bloc" id="bloc-11">
            <div class="container bloc-xl">
                <div class="row row-no-gutters">
                    <div class="col-sm-12"></div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-11 END -->
        <!-- Footer - bloc-12 -->
        <div class="bloc b-parallax bgc-white l-bloc" id="bloc-12">
            <div class="container bloc-sm">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="mg-md text-center tc-dark-red animated puffIn">Los mejores cortes</h1>
                        <h2 class="mg-md text-center">***</h2>
                        <p class="animated pulse">A la parrilla, ahumado, al horno, disfruta de los mejores cortes de carne solo aquí, en JERLAP utilizamos carne fresca y de la mejor calidad para garantizar el mejor sabor y una experiencia inigualable.</p>
                    </div>
                    <div class="col-sm-6"><img src="{{asset('img/carne.jpg')}}" class="img-responsive" /></div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-12 END -->
        <!-- Footer - bloc-13 -->
        <div class="bloc bgc-white l-bloc" id="bloc-13">
            <div class="container bloc-sm">
                <div class="row">
                    <div class="col-sm-6"><img src="img/vino.jpg" class="img-responsive" /></div>
                    <div class="col-sm-6">
                        <h1 class="mg-md text-center tc-dark-red animated puffIn">Tenemos las mejores acompañantes<br></h1>
                        <h2 class="mg-md text-center">***</h2>
                        <p class="text-right animated pulse">¿Necesitas acompañar tu comida? Nada mejor que uno de nuestros mejores vinos, en JERLAP tenemos una amplia gama de bebidas que te encantarán, disfruta desde un cóctel preparado hasta un agua de frutas para los niños.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-13 END -->
        <!-- Footer - bloc-14 -->
        <div class="bloc bg-Restaurant-2014 b-parallax bgc-white tc-white" id="bloc-14">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="mg-lg device-bloc-text-vc tc-white">Pide la comida con tu celular</h2>
                        <p class="mg-lg">En JERLAP estamos comprometidos con le medio ambiente, y le decimos adiós al papel con nuestro nuevo sistema de comandas electrónicas, solicita tu clave de acceso y podrás ordenar desde la comodidad de tu teléfono celular, además contamos con facturación electrónica por lo que podrás realizar el pago de tus alimentos sin intercambios molestos ni problemas con tu tarjeta.</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="center-block blocsapp-device blocsapp-device-iphone6 iphone6-space-grey"><img src="img/img2.png" width="1" height="12" /></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-14 END -->
        <!-- Footer - bloc-15 -->
        <div class="bloc bgc-white l-bloc" id="bloc-15">
            <div class="container">
                <div class="row voffset-md">
                    <div class="col-sm-12">
                        <h2 class="text-center mg-md">Meet our team</h2>
                        <p class="sub-heading text-center">We are a group of skilled individuals.</p>
                    </div>
                </div>
                <div class="row voffset-lg">
                    <div class="col-sm-2"><img src="img/placeholder-user.png" class="img-responsive img-circle center-block blocs-team-avatar" /></div>
                    <div class="col-sm-4">
                        <h3 class="blocs-team-header">Gerardo</h3>
                        <p class="blocs-team-details">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p><br><a href="index.html" target="_blank"><span class="fa fa-twitter icon-sm pull-left blocs-team-first-social"></span></a><a href="index.html" target="_blank"><span class="fa fa-facebook icon-sm pull-left"></span></a><a href="index.html" target="_blank"><span class="fa fa-dribbble icon-sm pull-left"></span></a></div>
                    <div class="col-sm-2"><img src="img/placeholder-user.png" class="img-responsive img-circle center-block blocs-team-avatar" /></div>
                    <div class="col-sm-4">
                        <h3 class="blocs-team-header">Romulo</h3>
                        <p class="blocs-team-details">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p><br><a href="index.html" target="_blank"><span class="fa fa-twitter icon-sm pull-left blocs-team-first-social"></span></a><a href="index.html" target="_blank"><span class="fa fa-facebook icon-sm pull-left"></span></a><a href="index.html" target="_blank"><span class="fa fa-dribbble icon-sm pull-left"></span></a></div>
                </div>
                <div class="row voffset-lg">
                    <div class="col-sm-2"><img src="img/placeholder-user.png" class="img-responsive img-circle center-block blocs-team-avatar" /></div>
                    <div class="col-sm-4">
                        <h3 class="blocs-team-header">Emilio</h3>
                        <p class="blocs-team-details">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p><br><a href="index.html" target="_blank"><span class="fa fa-twitter icon-sm pull-left blocs-team-first-social"></span></a><a href="index.html" target="_blank"><span class="fa fa-facebook icon-sm pull-left"></span></a><a href="index.html" target="_blank"><span class="fa fa-dribbble icon-sm pull-left"></span></a></div>
                    <div class="col-sm-2"><img src="img/placeholder-user.png" class="img-responsive img-circle center-block blocs-team-avatar" /></div>
                    <div class="col-sm-4">
                        <h3 class="blocs-team-header">Jesus</h3>
                        <p class="blocs-team-details">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p><br><a href="index.html" target="_blank"><span class="fa fa-twitter icon-sm pull-left blocs-team-first-social"></span></a><a href="index.html" target="_blank"><span class="fa fa-facebook icon-sm pull-left"></span></a><a href="index.html" target="_blank"><span class="fa fa-dribbble icon-sm pull-left"></span></a></div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-15 END -->
        <!-- Footer - bloc-16 -->
        <div class="bloc bgc-white l-bloc" id="bloc-16">
            <div class="container bloc-sm">
                <div class="row voffset-lg">
                    <div class="col-sm-2"><img src="img/placeholder-user.png" class="img-responsive img-circle center-block blocs-team-avatar" /></div>
                    <div class="col-sm-4">
                        <h3 class="blocs-team-header">Esleban</h3>
                        <p class="blocs-team-details">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p><br><a href="index.html" target="_blank"><span class="fa fa-twitter icon-sm pull-left blocs-team-first-social"></span></a><a href="index.html" target="_blank"><span class="fa fa-facebook icon-sm pull-left"></span></a><a href="index.html" target="_blank"><span class="fa fa-dribbble icon-sm pull-left"></span></a></div>
                    <!-- <div class="col-sm-2"><img src="img/placeholder-user.png" class="img-responsive img-circle center-block blocs-team-avatar" /></div>
                    <div class="col-sm-4">
                        <h3 class="blocs-team-header">Polet</h3>
                        <p class="blocs-team-details">Lorem ipsum dolor sit amet, adipiscing elit Aenean commodo ligula eget.</p><br><a href="index.html" target="_blank"><span class="fa fa-twitter icon-sm pull-left blocs-team-first-social"></span></a><a href="index.html" target="_blank"><span class="fa fa-facebook icon-sm pull-left"></span></a><a href="index.html" target="_blank"><span class="fa fa-dribbble icon-sm pull-left"></span></a></div>
                    -->
                </div>
            </div>
        </div>
        <!-- Footer - bloc-16 END -->
        <!-- Footer - bloc-17 -->
        <div class="bloc build-with-blocs-bloc bgc-black" id="bloc-17">
            <div class="container bloc-md">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="index.html"><img src="{{asset('img/logo.svg')}}" class="center-block mg-sm" height="94" width="232" /></a>
                        <p class="text-center">Copirigth <br></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-17 END -->
    </div>
    <!-- Main container END -->
</body>

</html>
