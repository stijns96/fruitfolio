<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');

  $item = $CONFIG['USERS']['Shantusha']['portfolio']['item3'];
?>
<link rel="stylesheet" href="assets/css/pages/detailpage/detail.min.css">
<link rel="stylesheet" href="assets/css/pages/detailpage/shantusha/shantusha.min.css">

</head>

<body class="detail">
    <!-- Header -->
    <?php
        // Get Header
        include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/header.php')
    ?>
    <!-- Main -->
    <main>
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1><?php echo $item['title'] ?></h1>
                        <span><?php echo $item['subtitle'] ?></span>
                    </div>
                </div>
            </div>
        </section>

        <article>
            <section>
                <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <h2>Over dit project</h2>
                        </div>
                        <div class="col-12 col-md-6">
                            <p class="mb-3">
                                In het derde blok heb ik een eigen client case aangepakt. Deze client case gaf mij de kans om een website te ontwerpen voor het bedrijf Joma makelaardij.
                                Joma Makelaardij is een makelaardij gevestigd in Den Haag. Zij willen met de tijd meegaan en hun doelgroep beter bereiken. Hun eisen aan de website waren dan ook dat het modern, strak, proffesioneel en minimalistisch moet blijven. Joma makelaardij had al een bestaande website, maar die was niet voorzien van zoveel informatie. Om die reden nam ik samen met mijn client de beslissing om het nieuwe logo te implementeren in de nieuwe website. Deze heb ik in <a href="https://fruitfolio.nl/logo-ontwerpen.php" target="_blank" rel="noreffer noopener">blok 1</a> gemaakt. Dit gaf Joma makelaardij een nieuwe “look” en “feel”.
                            </p>
                            <a href="https://www.jomamakelaardij.com/" class="btn btn-primary" target="_blank" rel="nofollow noreffer noopener">Bekijk website <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure>
                                <img class="img-fluid shadow-none" src="assets/images/portfolio/shantusha/client-case/project3-Mockup.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Over het logo</h2>
                            <p class="mb-5">
                                Voor het ontwerpen van het logo keek ik naar de uitstraling die het logo moest tonen. Zo moest het proffesionele, maar vriendelijke van het bedrijf terug komen in het logo.
                            </p>

                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/client-case/logo.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Styleguide</h2>
                            <p class="mb-5">
                                Uiteindelijk heb ik een keuze gemaakt in de letters die ik wilde uitwerken. Deze heb ik vervolgens groter en gedetailleerder geschets. Dit zag er als volgt uit:
                            </p>
                        </div>

                        <div class="col-12 col-md-6">
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/client-case/styleguide-voorbeeld-2.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                        <div class="col-12 col-md-6">
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/client-case/styleguide-voorbeeld-1.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Eindproduct</h2>
                            <p class="mb-5">
                                Om de website te realiseren heb ik gebruikt gemaakt van Figma en Wordpress.
                            </p>
                        </div>

                        <div class="col-12 col-md-4">
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/client-case/voorbeeld-website-3.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                        <div class="col-12 col-md-4">
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/client-case/voorbeeld-website-2.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                        <div class="col-12 col-md-4">
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/client-case/voorbeeld-website-1.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row projecten m-0">
                        <div class="col-12 text-center">
                            <h2>Projecten</h2>
                        </div>
                        <?php foreach($CONFIG['USERS']['Shantusha']['portfolio'] as $item): ?>
                        <div id="<?php echo $item['id']; ?>" class="col-12 col-lg-4 item
                        <?php if (strpos($_SERVER['REQUEST_URI'],  $item['id']) !== false){
                        echo ' d-none';
                        } ?>">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div>
                                        <h3 class="card-title"><?php echo $item['title'] ?></h3>
                                        <span class="card-subtitle"><?php echo $item['subtitle'] ?></span>
                                    </div>
                                    <div>
                                        <a href="<?php echo $item['link'] ?>" class="card-link">
                                            <span>Bekijk project </span>
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                        <figure class="m-0">
                                            <img class="card-img-bottom" src="<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
            </section>
        </article>
    </main><!-- Footer --> <?php 
        // Get Footer
        include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/footer.php');

        // Get Scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/scripts.php');
    ?>
</body>

</html>