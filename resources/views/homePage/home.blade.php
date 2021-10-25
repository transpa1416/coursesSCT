<!doctype html>
<html lang="es">
<head>
    @include('homePage.includes.head')
</head>

<body>
    <header>
        @include('homePage.includes.header')
    </header>
    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                {{-- <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li> --}}
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
{{--                     <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div> --}}
                </div>
{{--                 <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                                gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-5">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                        <image href="{{ asset('images/homepage/courses_logo/Writer.png') }}" height="140" width="140"/>
                    </svg>
                    <h2>Writer</h2>
                    <p>LibreOffice Writer es el componente procesador de texto de código abierto del paquete de software LibreOffice, que compite con el MS Word y que esta en rápido crecimiento en el mundo. Cada vez son más las personas como tú desean aprender de él y más si es en muy corto tiempo</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ir a curso</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-5">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                        <image href="{{ asset('images/homepage/courses_logo/Calc.png') }}" height="140" width="140"/>
                    </svg>
                    <h2>Calc</h2>
                    <p>El curso de Libreoffice Calc para principiantes es sobre como aprender a usar una hoja de cálculo de manera fácil y aplicar lo aprendido en la vida diaria a través de ejemplos prácticos y sencillos. El curso es específicamente sobre el Libreoffice Calc, la hoja de cálculo que hace parte de la suite de herramientas de oficina de software libre, Libreoffice</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ir a curso</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div><!-- /.container -->
        <!-- FOOTER -->
        <footer class="container">
            @include('homePage.includes.footer')
        </footer>
    </main>
</html>
