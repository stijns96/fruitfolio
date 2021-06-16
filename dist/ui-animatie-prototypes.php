<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');

  $item = $CONFIG['USERS']['Calvin']['portfolio']['item2'];
?>
<link rel="stylesheet" href="assets/css/pages/detailpage/detail.min.css">
<link rel="stylesheet" href="assets/css/pages/detailpage/calvin/calvin.min.css">

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
                            <h2>Introductie</h2>
                            <p>
                                Om websites interactiever en intrigerend te maken kan er gebruik gemaakt worden van UI animaties. De normale website prototyping tools schieten veelal te kort in het kunnen animeren van UI elementen. Daarom heb ik als doel gesteld om het maken van UI animatie prototypes met Protopie te leren.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Eindresultaat</h2>
                            <p>
                                Als resultaat heb ik een 20-tal UI animatie prototypes gemaakt. Deze prototypes zijn allemaal verschillend in interactie waardoor ik veel geleerd heb van het maken van UI animatie prototypes.
                                <br />
                                <br />
                                Onderstaand is een selectie van de UI animatie prototypes te zien. De onderstaande prototypes zijn interactief.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto mb-5">
                            <div class="frame-container">
                                <iframe class="responsive-iframe" src="https://cloud.protopie.io/p/19905a303a?ui=false&mockup=true&touchHint=false&scaleToFit=false&cursorType=touch"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 mx-auto mb-5">
                            <div class="frame-container">
                                <iframe class="responsive-iframe" src="https://cloud.protopie.io/p/80dd16eb74?ui=false&mockup=true&touchHint=false&scaleToFit=false&cursorType=touch"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 mx-auto">
                            <div class="frame-container">
                                <iframe class="responsive-iframe" src="https://cloud.protopie.io/p/baacae02b3?ui=false&mockup=true&touchHint=false&scaleToFit=false&cursorType=touch"></iframe>
                            </div>
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
                        <?php foreach($CONFIG['USERS']['Calvin']['portfolio'] as $item): ?>
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