<!DOCTYPE html>
<html>
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
</head>
<body class="tyc">
<div class="header bg-blue-dark">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-6">
            	<a href="/"><img src="img/logo-win-plus.png" width="150"></a>
            </div>
        </div>
    </div>
</div>
<div class="container py-3">
	<div class="row font-source col">
	    @if (isset($tyc))
	        <p>{!!$tyc!!}</p>
	    @else
	        <p></p>
	    @endif
	</div>
</div>
<footer class="bg-blue-dark">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-6">
            	<a href="/"><img src="img/logo-win-plus.png" width="195"></a>
            </div>
            <div class="col-md-6 mt-3 font-source text-white text-right">
                <p>Copyright &copy; 2019, WINSPORTS Bogotá - Colombia. Todos los derechos reservados.</p>
                <p><a class="text-white" href="{{route('tyc')}}">Términos y Condiciones</a></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>