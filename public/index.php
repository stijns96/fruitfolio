<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');
?> <link rel="stylesheet" href="assets/css/pages/home/home.min.css"><body id="home"> <?php
    // Get Logo
    include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/logo.php');
  ?> <!-- Main --><main><section id="landing"><div class="container-fluid"><div class="row nav nav-tabs" id="nav-tab" role="tablist"> <?php foreach($CONFIG['USERS'] as $user): ?> <div class="col-12 col-md-3 character" id="<?php echo $user['id']; ?>" href="#<?php echo $user['id']; ?>-tab" role="tab" aria-controls="nav-home" aria-selected="true"><div class="user-anim"><div class="<?php echo $user['id']; ?> animation"></div></div><div class="user-info"><h4><?php echo $user['name'] ?></h4><span><?php echo $user['job'] ?></span></div></div> <?php endforeach?> </div></div></section><div class="tab-content" id="portfolio"><div class="tab-pane" id="stijn-tab" role="tabpanel" aria-labelledby="nav-contact-tab"><section class="hero"><div class="container"><div class="row"><div class="col-12"><h2><?php echo $CONFIG['USERS']['Stijn']['name'] ?></h2><span><?php echo $CONFIG['USERS']['Stijn']['job'] ?></span></div></div></div></section><section class="intro"><div class="container"><div class="row"><div class="col-12 col-lg-8 mx-auto text-center"><p>Tijdens deze minor heb ik aan drie verschillende leerdoelen gewerkt. Per leerdoel kreeg je vijf weken om dit doel te bereiken. De doelen die ik heb gekozen hebben allemaal te maken met programmeren. Zo heb ik een CRUD Database, Login Systeem en een JAMstack website gemaakt.</p></div></div><div class="row projecten"><div class="col-12 text-center"><h2>Projecten</h2></div> <?php foreach($CONFIG['USERS']['Stijn']['portfolio'] as $item): ?> <div class="col-12 col-lg-4 item"><div class="card h-100"><div class="card-body"><div><h3 class="card-title"><?php echo $item['title'] ?></h3><span class="card-subtitle"><?php echo $item['subtitle'] ?></span></div><div><a href="<?php echo $item['link'] ?>" class="card-link"><span>Bekijk project </span><i class="fas fa-arrow-right"></i></a><figure class="m-0"><img class="card-img-bottom" src="<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>"></figure></div></div></div></div> <?php endforeach?> </div></div></section></div><div class="tab-pane" id="andrew-tab" role="tabpanel" aria-labelledby="nav-home-tab"><section class="hero"><div class="container"><div class="row"><div class="col-12"><h2><?php echo $CONFIG['USERS']['Andrew']['name'] ?></h2><span><?php echo $CONFIG['USERS']['Andrew']['job'] ?></span></div></div></div></section><section class="intro"><div class="container"><div class="row"><div class="col-12 col-lg-8 mx-auto text-center"><p>De afgelopen 15 weken heb ik gewerkt aan drie projecten. Het eerste project was het leren maken van logo’s. Het tweede project was het leren maken van een eigen lettertype en het derde project heb ik een echte website gemaakt voor een makelaar. Onderstaand staan de projecten waar ik aan heb gewerkt.</p></div></div><div class="row projecten"><div class="col-12 text-center"><h2>Projecten</h2></div> <?php foreach($CONFIG['USERS']['Andrew']['portfolio'] as $item): ?> <div class="col-12 col-lg-4 item"><div class="card h-100"><div class="card-body"><div><h3 class="card-title"><?php echo $item['title'] ?></h3><span class="card-subtitle"><?php echo $item['subtitle'] ?></span></div><div><a href="<?php echo $item['link'] ?>" class="card-link"><span>Bekijk project </span><i class="fas fa-arrow-right"></i></a><figure class="m-0"><img class="card-img-bottom" src="<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>"></figure></div></div></div></div> <?php endforeach?> </div></div></section></div><div class="tab-pane" id="calvin-tab" role="tabpanel" aria-labelledby="nav-profile-tab"><section class="hero"><div class="container"><div class="row"><div class="col-12"><h2><?php echo $CONFIG['USERS']['Calvin']['name'] ?></h2><span><?php echo $CONFIG['USERS']['Calvin']['job'] ?></span></div></div></div></section><section class="intro"><div class="container"><div class="row"><div class="col-12 col-lg-8 mx-auto text-center"><p>De afgelopen 15 weken heb ik in het kader van de minor Visual Design & Front-end development 3 projecten uitgevoerd om mij te ontwikkelen als webdesigner. Het eerste project dat ik heb uitgevoerd was het leren maken van aesthetically pleasing websites, het tweede project was het leren maken van UI animatie prototypes en als laatste project heb ik van het herontwerp prototype van mijn eerste project een responsive website gemaakt in Webflow.</p></div></div><div class="row projecten"><div class="col-12 text-center"><h2>Projecten</h2></div> <?php foreach($CONFIG['USERS']['Calvin']['portfolio'] as $item): ?> <div class="col-12 col-lg-4 item"><div class="card h-100"><div class="card-body"><div><h3 class="card-title"><?php echo $item['title'] ?></h3><span class="card-subtitle"><?php echo $item['subtitle'] ?></span></div><div><a href="<?php echo $item['link'] ?>" class="card-link"><span>Bekijk project </span><i class="fas fa-arrow-right"></i></a><figure class="m-0"><img class="card-img-bottom" src="<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>"></figure></div></div></div></div> <?php endforeach?> </div></div></section></div><div class="tab-pane" id="shantusha-tab" role="tabpanel" aria-labelledby="nav-contact-tab"><section class="hero"><div class="container"><div class="row"><div class="col-12"><h2><?php echo $CONFIG['USERS']['Shantusha']['name'] ?></h2><span><?php echo $CONFIG['USERS']['Shantusha']['job'] ?></span></div></div></div></section><section class="intro"><div class="container"><div class="row"><div class="col-12 col-lg-8 mx-auto text-center"><p>De afgelopen 15 weken heb ik gewerkt aan drie projecten. Het eerste project was het leren maken van logo’s. Het tweede project was het leren maken van een eigen lettertype en het derde project heb ik een echte website gemaakt voor een makelaar. Onderstaand staan de projecten waar ik aan heb gewerkt.</p></div></div><div class="row projecten"><div class="col-12 text-center"><h2>Projecten</h2></div> <?php foreach($CONFIG['USERS']['Shantusha']['portfolio'] as $item): ?> <div class="col-12 col-lg-4 item"><div class="card h-100"><div class="card-body"><div><h3 class="card-title"><?php echo $item['title'] ?></h3><span class="card-subtitle"><?php echo $item['subtitle'] ?></span></div><div><a href="<?php echo $item['link'] ?>" class="card-link"><span>Bekijk project </span><i class="fas fa-arrow-right"></i></a><figure class="m-0"><img class="card-img-bottom" src="<?php echo $item['img'] ?>" alt="<?php echo $item['title'] ?>"></figure></div></div></div></div> <?php endforeach?> </div></div></section></div></div></main><!-- Footer --> <?php 
    // Get Footer
    include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/footer.php');

    // Get Scripts
    include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/scripts.php');
    ?> <script>$(function() {
        var page = $('html,body');

        page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function() {
            page.stop();
        });

        if (window.location.hash) {
            page.animate({
                scrollTop: $(window.location.hash + '-tab').offset().top
            }, 1000, 'easeInOutCirc');
        }

        // Scroll Smooth To Tab
        function scrollTo() {
            $('.character').click(function(e) {
                e.preventDefault()

                var character = '#' + $(this).attr('id');

                if ($(document).width() < 768) {
                    setTimeout(function() {
                        $(character).tab('show')
                        page.animate({
                            scrollTop: $('#portfolio').offset().top
                        }, 1000, 'easeInOutCirc');
                    }, 2500);
                } else {
                    $(character).tab('show')
                    page.animate({
                        scrollTop: $('#portfolio').offset().top
                    }, 1000, 'easeInOutCirc');
                }
            });
        };

        function lottie() {

            // Andrew Animation
            let andrew = document.querySelector('.andrew');
            let andrewId = document.querySelector('#andrew');

            let animationAndrew = bodymovin.loadAnimation({
                container: andrew,
                renderer: 'svg',
                loop: true,
                autoplay: false,
                path: "assets/animations/json/andrew.json"
            });

            andrewId.addEventListener('mouseenter', () => {
                animationAndrew.play();
            });

            andrewId.addEventListener('mouseleave', () => {
                animationAndrew.pause();
            });



            // Calvin Animation
            let calvin = document.querySelector('.calvin');
            let calvinId = document.querySelector('#calvin');

            let animationClavin = bodymovin.loadAnimation({
                container: calvin,
                renderer: 'svg',
                loop: true,
                autoplay: false,
                path: "assets/animations/json/calvin.json"
            });

            calvinId.addEventListener('mouseenter', () => {
                animationClavin.play();
            });

            calvinId.addEventListener('mouseleave', () => {
                animationClavin.pause();
            });



            // Shantusha Animation
            let shantusha = document.querySelector('.shantusha');
            let shantushaId = document.querySelector('#shantusha');

            let animationShantusha = bodymovin.loadAnimation({
                container: shantusha,
                renderer: 'svg',
                loop: true,
                autoplay: false,
                path: "assets/animations/json/shantusha.json"
            });

            shantushaId.addEventListener('mouseenter', () => {
                animationShantusha.play();
            });

            shantushaId.addEventListener('mouseleave', () => {
                animationShantusha.pause();
            });



            // Stijn Animation
            let stijn = document.querySelector('.stijn');
            let stijnId = document.querySelector('#stijn');

            let animationStijn = bodymovin.loadAnimation({
                container: stijn,
                renderer: 'svg',
                loop: true,
                autoplay: false,
                path: "assets/animations/json/stijn.json"
            });

            stijnId.addEventListener('mouseenter', () => {
                animationStijn.play();
            });

            stijnId.addEventListener('mouseleave', () => {
                animationStijn.pause();
            });
        }

        scrollTo();
        lottie();
    });</script></body>