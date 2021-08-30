<?php
if (isset($_GET['date'])) {
    $d = $_GET['date'];
} else {
    $d = false;
}
?>
<!doctype html>
<html lang="es" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Luna y Las Maticas</title>
    <meta name="description" content="La luna, sus fases y que trabajos se recomiendan hacer a nuestras maticas!"/>
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Fases, lunas, bonsai, maticas, trabajos, abono, poda, sustrato, foliar, Maticas, Abono, Sustrato,Foliar,
Esquejes,
Semillas,
Siembra,
Acodo,
injerto,
Trasplante, Poda"/>
    <meta name="author" content="CarlosPinedaT"/>
    <meta name="copyright" content="CarlosPinedaT"/>
    <meta http-equiv="cache-control" content="no-cache"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="vendor/fortawesome/font-awesome/css/all.min.css" rel="stylesheet"/>

</head>
<body style=" background-color: #eaeaea;padding-top: 64px;" class="d-flex flex-column h-100">
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin: 0 auto;">La Luna y las Maticas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            -->
        </div>
    </nav>
</header>
<main class="flex-shrink-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <p>
                    <?php
                    if ($d) {
                        echo $d;
                    } else {
                        echo date('Y-m-d H:m');
                    }
                    ?>
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col text-center">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-dark"><h4>Datos</h4></li>
                    <li class="list-group-item">Distancia Luna : <strong id="txtDistancia"></strong> Km</li>
                    <li class="list-group-item">Edad : <strong id="txtEdad"></strong></li>
                    <li class="list-group-item">Signo Zodiaco : <strong id="txtZodiaco"></strong></li>
                </ul>
            </div>
            <div class="col-3 text-center">
                <img id="img" src="" class="img-fluid">
                <h6 id="fase"></h6>
            </div>
            <div class="col text-center">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-dark"><h4>Maticas</h4></li>
                    <li id="as" class="list-group-item list-plant">Abono Sustrato</li>
                    <li id="af" class="list-group-item list-plant">Abono Foliar</li>
                    <li id="es" class="list-group-item list-plant">Esquejes</li>
                    <li id="ss" class="list-group-item list-plant">Semillas / Siembra</li>
                    <li id="ac" class="list-group-item list-plant">Acodo</li>
                    <li id="in" class="list-group-item list-plant">injerto</li>
                    <li id="tr" class="list-group-item list-plant">Trasplante</li>
                    <li id="po" class="list-group-item list-plant">Poda</li>
                </ul>
                <br>

            </div>
        </div>
        <br>
        <div class="row justify-content-md-center">
            <div id="extra" class=" col alert alert-success text-center col-md-4" role="alert">
                <strong>Fase lunar óptima para :</strong>
                <ul style="font-size: small">
                    <li>Yamadori</li>
                    <li>Trasplante</li>
                    <li>Corte Drastico</li>
                </ul>
            </div>
        </div>
    </div>
</main>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <small>Creado por <i class="fas fa-heart"></i> a las <i class="fab fa-pagelines"></i> por
            CarlosPineda</small><br>
        <small>Hora oficial UTC-5</small>
    </div>
</footer>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

<script>
    (function () {

        jQuery('.list-plant, #extra').hide();

        jQuery.ajax({
            headers: {"Accept": "application/json"},
            url: "moon.php",
            crossDomain: true,
            dataType: 'json',
            data: {
                round: true
                <?php
                if ($d) {
                    echo ", date : $d";
                }
                ?>
            }
        }).done(function (data) {

            jQuery('#txtDistancia').text(data.distance);
            jQuery('#txtEdad').text(data.age);
            jQuery('#txtZodiaco').text(data.zodiac);

            jQuery('#fase').text(data.phase_name);
            faseImg = data.phase_name.replace(/ /g, "").toLowerCase();
            jQuery("#img").attr('src', 'images/' + faseImg + '.svg')

            if (faseImg == 'lunanueva') {
                jQuery("#as").show();
            } else if (faseImg == 'lunacreciente') {
                jQuery("#as, #es, #tr, #po").show();
            } else if (faseImg == 'cuatocreciente') {
                jQuery("#es, #ss, #tr, #po").show();
            } else if (faseImg == 'gibosacreciente') {
                jQuery("#af, #es, #ac, #in, #tr, #po").show();
                jQuery('#extra').show();
            } else if (faseImg == 'lunallena') {
                jQuery("#af, #ac, #in").show();

            } else if (faseImg == 'gibosamenguante') {
                jQuery("#af, #es, #ac, #in, #tr, #po").show();

            } else if (faseImg == 'cuartomenguante') {
                jQuery("#as, #es, #tr, #po").show();
                jQuery('#extra').show();
            } else if (faseImg == 'lunamenguante') {
                jQuery("#as, #es, #tr, #po").show();
            }
        });

    })();
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121634383-3"></script>
<script type="application/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());
    gtag('config', 'UA-121634383-3');
</script>


</body>
</html>