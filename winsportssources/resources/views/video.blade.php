<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PH8JSZ9');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37954209-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-37954209-3');
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/slick/slick/slick.min.js"></script>
    <script src="//tt.mbww.com/tt-ff805620597e92258a4fdf2324268ecb9704a8d0600924efc10ff253eddeab01.js" async></script>
    <link rel="stylesheet" type="text/css" href="js/slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="js/slick/slick/slick-theme.css" />
    <link href="https://fonts.googleapis.com/css?family=Passion+One:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=5">
    <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
    <script type="text/javascript">
        $(document).ready(function() {
            $('.slider').slick({
                arrows: false,
                autoplay: true,
            });
        });
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8JSZ9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container-fluid">
        <header>
            <div class="container">
                <div class="row table-match">
                    <div class="col-md-3 logo-win">
                        <img src="img/logo-win-plus.png" width="195">
                    </div>
                    @if(isset($matches))
                        <div class="col-md-9">
                            <div class="row justify-content-md-left title">
                                <h1 class="color-blue-text text-center upc-text"> {{ $conference }}</h1>
                            </div>
                            @foreach ($matches as $match)
                            @if($match->highlight == 1)
                            <div class="row d-sm-block d-md-none match">
                                <div class="col-2">
                                    <img src="uploads/{{ $match->logo_team_1 }}" width="100%">
                                </div>
                                <div class="col-3 p-0">{{ $match->name_team_1 }}</div>
                                <div class="col-2">VS</div>
                                <div class="col-3 p-0">{{ $match->name_team_2 }}</div>
                                <div class="col-2">
                                    <img src="uploads/{{ $match->logo_team_2 }}" width="100%">
                                </div>
                                <div class="py-2 col text-center">{{ $match->date }} {{ substr($match->hours,0,-3) }} HS</div>
                            </div>
                            <div class="container mb-20 border-div d-none d-md-block">
                                    <div class="row justify-content-md-center">
                                        <div class="col col-md-2">
                                            <img src="uploads/{{ $match->logo_team_1 }}" heigth="100" width="100">
                                        </div>
                                        <div class="col-md-8 justify-content-md-right">
                                            <h3 class="color-blue-text text-center upc-text">{{ $match->name_team_1 }} VS  {{ $match->name_team_2 }}</h3>
                                            <h4 class="card-text font-source text-center upc-text" style="margin-bottom: -2px; color:white;">{{ $match->date }} {{ substr($match->hours,0,-3) }} HS</h4>
                                        </div>
                                        <div class="col col-md-2">
                                            <img src="uploads/{{ $match->logo_team_2 }}" heigth="100" width="100">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-md-12 mt-20">
                                <div class="container">
                                    <div class="row">
                                        @foreach ($matches as $match)
                                        @if($match->highlight != 1)
                                        <div class="col-md-5" style="margin-left: 39px">
                                            <div class="row mt-20">
                                                <div class="col-md-2 justify-content-md-center">
                                                    <img src="uploads/{{ $match->logo_team_1 }}" width="50px">
                                                </div>
                                                <div class="col-md-8 justify-content-md-center">
                                                    <p class="card-text font-source text-center upc-text color-blue-text" style="margin-bottom: -2px">{{ $match->name_team_1 }} VS  {{ $match->name_team_2 }}</p>
                                                    <p class="card-text font-source text-center upc-text" style="margin-bottom: -2px; color:white;">{{ $match->date }}</p>
                                                    <p class="card-text font-source text-center upc-text" style="margin-bottom: -2px; color:white;">{{ substr($match->hours,0,-3) }} HS</p>
                                                </div>
                                                <div class="col-md-2 justify-content-md-center">
                                                    <img src="uploads/{{ $match->logo_team_2 }}" width="50px">
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </header>
        <div class="slider">
            @if(isset($home))
            {{-- si hay banners cargados al home se muestran --}}
                  <div><img src="uploads/{{ $home->banner_1 }}"></div>
                  <div><img src="uploads/{{ $home->banner_2 }}"></div>
                  <div><img src="uploads/{{ $home->banner_3 }}"></div>
                  @if(isset($home->banner_4))
                  <div><img src="uploads/{{ $home->banner_4 }}"></div>
                  @endif
                  @if(isset($home->banner_5))
                  <div><img src="uploads/{{ $home->banner_5 }}"></div>
                  @endif
            @else
            {{-- si no se han cargado se muestran los que estan por defecto --}}
                 <div><img src="img/Comerciales_WIN_Sports_013.jpg"></div>
                 <div><img src="img/Comerciales_WIN_Sports_018.jpg"></div>
                 <div><img src="img/Comerciales_WIN_Sports_061.jpg"></div>
            @endif
        </div>
        <div class="container">
            <div class="row intro-video">
                <div class="col-sm pt-5 pr-5 pb-5 pl-5 text-center">
                    <h2 class="mt-4 mb-3 d-none d-md-block">¡PÍDELO YA!</h2>
                    <h2 class="mt-4 mb-3 d-block d-md-none">¡LLAMA Y PÍDELO YA!</h2>
                    <h2 class="mt-4 mb-3">Haz clic en el logo de tu operador</h2>
                    @if(isset($home->operators_asigned) && sizeof($home->operators_asigned))
                        <div class="operadores d-none d-md-block">
                            @foreach ($home->operators_asigned as $operatorDesktop)
                                @if($operatorDesktop->status == 1)
                                    <div class="operador">
                                        <a href="{{ $operatorDesktop->link }}" target="_blank" gtmOutbound="{{ $operatorDesktop->gtmOutbound }}" gtmProvider="{{ $operatorDesktop->gtmProvider }}" gtmDevice="{{ $operatorDesktop->gtmDevice }}"><img src="uploads/{{ $operatorDesktop->logo }}"></a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="operadores d-block d-md-none">
                            @foreach ($home->operators_asigned as $operatorDesktop)
                                @if($operatorDesktop->status == 1)
                                    <div class="operador">
                                        <a href="{{ $operatorDesktop->phone_link }}" target="_blank" gtmOutbound="{{ $operatorDesktop->gtmOutbound }}" gtmProvider="{{ $operatorDesktop->gtmProvider }}" gtmDevice="{{ $operatorDesktop->gtmDeviceMobile }}"><img src="uploads/{{ $operatorDesktop->logo }}"></a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div class="operadores d-none d-md-block">
                            <div class="operador">
                                <a href="https://www.directv.com.co/comprar/canales-premium/winplus" target="_blank" gtmOutbound="Link" gtmProvider="Directv" gtmDevice="Desktop"><img src="img/operadores/directv.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="https://www.claro.com.co/personas/app/solicitudes/solicitud-producto-nv/?prod=television&promo=tvwin&canal_trafico=ORGANICO" target="_blank" gtmOutbound="Link" gtmProvider="Claro" gtmDevice="Desktop"><img src="img/operadores/claro.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="https://www.movistar.co/television" target="_blank" gtmOutbound="Link" gtmProvider="Movistar" gtmDevice="Desktop"><img src="img/operadores/movistar.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="https://www.tigo.com.co/servicios/television/winsports" target="_blank" gtmOutbound="Link" gtmProvider="Tigo" gtmDevice="Desktop"><img src="img/operadores/tigo.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="https://etb.com/hogares/adicionales-winsports.aspx" target="_blank" gtmOutbound="Link" gtmProvider="Etb" gtmDevice="Desktop"><img src="img/operadores/etb.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="https://www.emcali.com.co/web/guest" target="_blank" gtmOutbound="Link" gtmProvider="Emcali" gtmDevice="Desktop"><img src="img/operadores/emcali.jpg" ></a>
                            </div>
                        </div>
                        <div class="operadores d-block d-md-none">
                            <div class="operador">
                                <a href="tel:0315185656" gtmOutbound="Link" gtmProvider="Directv" gtmDevice="Mobile"><img src="img/operadores/directv.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="tel:0317500500" gtmOutbound="Link" gtmProvider="Claro" gtmDevice="Mobile"><img src="img/operadores/claro.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="tel:018000911009" gtmOutbound="Link" gtmProvider="Movistar" gtmDevice="Mobile"><img src="img/operadores/movistar.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="tel:0344444141" gtmOutbound="Link" gtmProvider="Tigo" gtmDevice="Mobile"><img src="img/operadores/tigo.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="tel:0313777777" gtmOutbound="Link" gtmProvider="Etb" gtmDevice="Mobile"><img src="img/operadores/etb.jpg" ></a>
                            </div>
                            <div class="operador">
                                <a href="tel:0325240177" gtmOutbound="Link" gtmProvider="Emcali" gtmDevice="Mobile"><img src="img/operadores/emcali.jpg" ></a>
                            </div>
                        </div>
                    @endif
                    <h2 class="mt-4 mb-5">Este video tiene<br> las respuestas que buscas</h2>
                    <iframe src='{{ $home->video }}' width='100%' height='480' allow='autoplay; fullscreen; encrypted-media' frameborder='0' allowfullscreen allowscriptaccess='always' scrolling='no'></iframe>
                </div>
            </div>
        </div>
        <div class="container cta-section">
            <div class="row">
                <div class="col-sm text-center">
                    <a href="#" class="cta font-source openBtn" data-toggle="modal" data-target="#modalInfografia">Ver infografía</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalInfografia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <img src="uploads/{{ $home->infografia }}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container preguntas mt-5 mb-4">
            <div class="row">
                @if(isset($home->questions_asigned))
                {{-- si han cargado preguntas se muestran --}}
                    @foreach ( $home->questions_asigned as $question )
                        <div class="col-sm-4 mb-4">
                            <div class="card card-flip h-100">
                                <div class="card-front text-white bg-gray">
                                    <div class="card-body justify-content-center align-self-center text-center">
                                        <img src="uploads/{{ $question->logo }}">
                                        <h3 class="card-title">{{ $question->question }}</h3>
                                    </div>
                                </div>
                                <div class="card-back bg-blue">
                                    <div class="card-body justify-content-center align-self-center">
                                        <img src="uploads/{{ $question->logo }}" width="40" class="mb-3">
                                        <p class="card-text font-source text-center">{{ $question->answer }}</p>
                                        @if($question->id == 3)
                                            <div class="text-center">
                                                <img src="img/claro.png" width="40">
                                                <img src="img/emcali.png" width="40">
                                                <img src="img/direct-tv.png" width="40">
                                                <img src="img/tigo.png" width="40">
                                                <img src="img/movistar.png" width="40">
                                                <!-- <img src="img/hv-tv.png" width="40"> -->
                                                <img src="img/etb.png" width="40">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                {{-- si no han cargado preguntas se muestran las de siempre --}}
                <div class="col-sm-4 mb-4">
                    <div class="card card-flip h-100">
                        <div class="card-front text-white bg-gray">
                            <div class="card-body justify-content-center align-self-center text-center">
                                <img src="img/que-es.png">
                                <h3 class="card-title">¿Qué es<br> Win Sports Más?</h3>
                            </div>
                        </div>
                        <div class="card-back bg-blue">
                            <div class="card-body justify-content-center align-self-center">
                                <img src="img/que-es.png" width="40" class="mb-3">
                                <p class="card-text font-source text-center">Es el nuevo canal de Win Sports, con 24 horas de programación. Ahí podrás ver el fútbol profesional colombiano en vivo, sin comerciales durante los partidos y con más cámaras. También tendrás 4  nuevos programas con mejores ayudas tecnológicas. Es un canal 100% dedicado al fútbol.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="card card-flip h-100">
                        <div class="card-front text-white bg-gray">
                            <div class="card-body justify-content-center align-self-center text-center">
                                <img src="img/suscripcion.png">
                                <h3 class="card-title">¿Cómo hago para tenerlo?</h3>
                            </div>
                        </div>
                        <div class="card-back bg-blue">
                            <div class="card-body justify-content-center align-self-center">
                                <img src="img/suscripcion.png" width="40" class="mb-3">
                                <p class="card-text font-source text-center">Tienes que suscribirte, contactando a tu operador de televisión.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="card card-flip h-100">
                        <div class="card-front text-white bg-gray">
                            <div class="card-body justify-content-center align-self-center text-center">
                                <img src="img/canal.png">
                                <h3 class="card-title">¿Qué operadores de televisión lo van a tener?</h3>
                            </div>
                        </div>
                        <div class="card-back bg-blue">
                            <div class="card-body justify-content-center align-self-center">
                                <img src="img/canal.png" width="40" class="mb-3">
                                <p class="card-text font-source text-center">Puedes contactar a cualquiera de estos operadores en tu ciudad.</p>
                                <div class="text-center">
                                    <img src="img/claro.png" width="40">
                                    <img src="img/emcali.png" width="40">
                                    <img src="img/direct-tv.png" width="40">
                                    <img src="img/tigo.png" width="40">
                                    <img src="img/movistar.png" width="40">
                                    <!-- <img src="img/hv-tv.png" width="40"> -->
                                    <img src="img/etb.png" width="40">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="card card-flip h-100">
                        <div class="card-front text-white bg-gray">
                            <div class="card-body justify-content-center align-self-center text-center">
                                <img src="img/cuanto.png">
                                <h3 class="card-title">¿Cuánto vale y desde cuándo lo puedo ver?</h3>
                            </div>
                        </div>
                        <div class="card-back bg-blue">
                            <div class="card-body justify-content-center align-self-center">
                                <img src="img/cuanto.png" width="40" class="mb-3">
                                <p class="card-text font-source text-center">Pídelo a tu operador de televisión por $29.900 mensuales y verás más de 60 partidos en promedio en vivo, ($500 pesos por partido). A partir del 20 de enero de 2020 lo podrás disfrutar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="card card-flip h-100">
                        <div class="card-front text-white bg-gray">
                            <div class="card-body justify-content-center align-self-center text-center">
                                <img src="img/partidos.png">
                                <h3 class="card-title">¿Qué partidos puedo ver en <br>Win Sports Más?</h3>
                            </div>
                        </div>
                        <div class="card-back bg-blue">
                            <div class="card-body justify-content-center align-self-center">
                                <img src="img/partidos.png" width="40" class="mb-3">
                                <p class="card-text font-source text-center">En cada fecha verás todos los de la Liga, 3 de Torneo, 4 de Copa y 1 de Liga Femenina. También, los partidos de la Superliga colombiana. El campeonato difutbol y hasta 4 partidos de la liga turca.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-4">
                    <div class="card card-flip h-100">
                        <div class="card-front text-white bg-gray">
                            <div class="card-body justify-content-center align-self-center text-center">
                                <img src="img/canal.png">
                                <h3 class="card-title">¿Puedo ver el fútbol profesional colombiano en otro canal?</h3>
                            </div>
                        </div>
                        <div class="card-back bg-blue">
                            <div class="card-body justify-content-center align-self-center">
                                <img src="img/canal.png" width="40" class="mb-3">
                                <p class="card-text font-source text-center">Todos los partidos de la liga Colombiana, los podras ver en Win Sports Más y solo algunos por el canal Win Sports de siempre.</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <footer class="bg-blue-dark">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/logo-win-plus.png" width="195">
                    </div>
                    <div class="col-md-6 mt-3 font-source text-white text-right">
                        <p>Copyright &copy; 2019, WINSPORTS Bogotá - Colombia. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
