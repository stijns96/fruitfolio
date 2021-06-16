<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');

  $item = $CONFIG['USERS']['Shantusha']['portfolio']['item2'];
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
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Over dit project</h2>
                            <p>
                                In het tweede blok heb ik ervoor gekozen om een eigen lettertype te leren ontwerpen. Dit omdat ik mij al grotendeels had verdiept in typografie en binnen dit onderwerp een stap verder wilde gaan. Het zelf ontwerpen van een eigen lettertype en hierbij consistent te werk te gaan was een grote uitdaging. Daarnaast wilde ik mijn ervaring in het Adobe programma Illustrator verbreden. Om die reden ontwerpte ik de letters in Illustrator.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Schetsen</h2>
                            <p class="mb-5">
                                Ik ben begonnen met schetsen. Hierbij heb ik gelet op de vormen van de letters. Om consistent te werk te gaan, was het hergebruiken van vormen binnen een ontwerp een handig middel.
                            </p>

                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/eigen-lettertype/schetsen-letters-2.png" alt="Afbeelding Schetsen">
                            </figure>

                            <p class="mt-5 mb-3">
                                Uiteindelijk heb ik een keuze gemaakt in de letters die ik wilde uitwerken. Deze heb ik vervolgens groter en gedetailleerder geschets. Dit zag er als volgt uit:
                            </p>

                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/eigen-lettertype/schetsen-1.png" alt="Afbeelding Schetsen">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Eindproduct</h2>
                            <p class="mb-5">
                                Ik heb de schetsen in Illustrator letter voor letter uitgewerkt. Vervolgens heb ik de letters in Font Forge geplaatst en geexporteerd. In FontForge kon ik spelen met de afstand tussen letters en ruimtes van een letter.
                            </p>

                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/eigen-lettertype/eindresultaat-letters.png" alt="Eindresultaat Letters">
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