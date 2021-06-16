<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');

  $item = $CONFIG['USERS']['Shantusha']['portfolio']['item1'];
?>
<link rel="stylesheet" href="assets/css/pages/detailpage/detail.min.css">
<link rel="stylesheet" href="assets/css/pages/detailpage/shantusha/shantusha.min.css">

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
                                In het eerste blok was ik erg enthousiast om in vijf weken logo’s te leren maken en meer ervaring en inzichten te krijgen in dit proces. Daarnaast gaf dit mij ook de gelegenheid om het programma “Illustrator” beter onder de knie te krijgen. Voor deze opdracht heb ik drie logo’s ontworpen met ieder een fictieve client case. Dit zodat het logo beter tot stand kon komen op basis van hoe het in de praktijk ook zou kunnen lopen.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Fictieve client case 1: logo dansschool</h2>
                            <p class="mb-3">
                                Het eerste logo wat ik had ontworpen was voor een dansschool die zuidindiaase tempel dans uitoefent, genaamd “Krishna Kala”. Deze dansschool wilde hun bereik vergroten door een naamsbekenheid te creeeren en social media als platform te gebruiken.
                            </p>

                            <span>Belangrijkste eisen aan het logo:</span>

                            <ul>
                                <li>Herkenbaar</li>
                                <li>Bewegelijk</li>
                            </ul>

                            <p class="mb-5">
                                <b>Logo type:</b> gecombineerd logo
                            </p>
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/logo-ontwerpen/afbeelding-logo-1.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Fictieve client case 2: Joma makelaardij</h2>
                            <p class="mb-3">
                                Het tweede logo wat ik had ontworpen was voor een vastgoed makelaardij, genaamd “Joma”. Het bedrijf wilde een nieuw logo hebben om met de tijd mee te gaan en omdat hun vorig logo te gedetailleerd was. Hierdoor was het logo niet te herkennen.
                            </p>

                            <span>Belangrijkste eisen aan het logo:</span>

                            <ul>
                                <li>Herkenbaar</li>
                                <li>Abstract</li>
                                <li>Professioneel</li>
                                <li>Persoonlijk</li>
                            </ul>

                            <p class="mb-5">
                                <b>Logo type:</b> Typografisch logo
                            </p>
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/logo-ontwerpen/afbeelding-logo-2.png" alt="Afbeelding Logo">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <h2>Fictieve client case 3: kinderopvang</h2>
                            <p class="mb-3">
                                Het derde logo wat ik had ontworpen was voor een kinderopvang van Shivani Mankoe. Door Shivani haar werkervaring in verschillende kinderopvangen heeft ze haar naam kunnen opbouwen en herkennen mensen haar al snel. Om die reden wilde ze een logo voor haar toekomstige bezigheden.
                            </p>

                            <span>Belangrijkste eisen aan het logo:</span>

                            <ul>
                                <li>Kind op nummer 1</li>
                                <li>Kindvriendelijk</li>
                                <li>Professioneel</li>
                                <li>Aandacht voor het kind</li>
                            </ul>

                            <p class="mb-5">
                                <b>Logo type:</b> Typografisch logo
                            </p>
                            <figure>
                                <img class="img-fluid" src="assets/images/portfolio/shantusha/logo-ontwerpen/afbeelding-logo-3.png" alt="Afbeelding Logo">
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