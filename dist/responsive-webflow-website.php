<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');

  $item = $CONFIG['USERS']['Calvin']['portfolio']['item3'];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/src/css/lightgallery.css">
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
                                Om mijn vaardigheden als webdesigner uit te breiden heb ik Webflow geleerd. Door deze vaardigheid kan ik, wanneer nodig, ook zonder programmeur tot websites komen. Aangezien ik al een website prototype tijdens een ander project had gemaakt besloot ik voor dit project om deze website naar Webflow te vertalen.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Eindresultaat</h2>
                            <p class="pb-5">
                                Doordat ik nog niet bekend was met Webflow heb ik gedurende dit project veel geleerd over het maken van een website in Webflow. Ook heb ik veel geleerd over het gebruiken van CMS door het werken met Webflow. In het begin was het lastig om met de interface van Webflow overweg te kunnen. Gelukkig pakte ik het efficiënt werken met Webflow snel op, waardoor ik een mooie vertaling van het prototype naar Webflow heb kunnen maken.
                            </p>
                            <a href="https://bar-mokum.webflow.io/" class="btn btn-primary" target="_blank" rel="nofollow noreffer noopener">Bekijk website <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="row justify-content-center" id="lightgallery">
                        <a href="assets/images/portfolio/calvin/responsive-webflow-website/webflow-bar-mokum-macbook-mockup-1.png" class="col-12 col-lg-8 mx-auto mb-5">
                            <img src="assets/images/portfolio/calvin/responsive-webflow-website/webflow-bar-mokum-macbook-mockup-1.png" alt="Mockup 1" class="img-fluid" />
                        </a>
                        <a href="assets/images/portfolio/calvin/responsive-webflow-website/webflow-bar-mokum-macbook-mockup-2.png" class="col-12 col-lg-8 mx-auto mb-5">
                            <img src="assets/images/portfolio/calvin/responsive-webflow-website/webflow-bar-mokum-macbook-mockup-2.png" alt="Mockup 2" class="img-fluid" />
                        </a>
                        <a href="assets/images/portfolio/calvin/responsive-webflow-website/webflow-bar-mokum-macbook-mockup-3.png" class="col-12 col-lg-8 mx-auto">
                            <img src="assets/images/portfolio/calvin/responsive-webflow-website/webflow-bar-mokum-macbook-mockup-3.png" alt="Mockup 3" class="img-fluid" />
                        </a>
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

    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/src/js/lightgallery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@1.7.2/lib/jquery.mousewheel.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#lightgallery").lightGallery({
                mode: 'lg-fade',
                download: false
            });
        });
    </script>
</body>