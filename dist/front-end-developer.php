<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');

  $user = $CONFIG['USERS']['Stijn'];
?>
<link rel="stylesheet" href="assets/css/pages/detailpage/detail.min.css">
<link rel="stylesheet" href="assets/css/pages/detailpage/stijn/stijn.min.css">

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
                        <h1><?php echo $user['name'] ?></h1>
                        <span><?php echo $user['job'] ?></span>
                    </div>
                </div>
            </div>
        </section>

        <article>
            <?php foreach($CONFIG['USERS']['Stijn']['portfolio'] as $item): ?>
            <section id="<?php echo $item['id'] ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h2><?php echo $item['title'] ?></h2>
                            <h5><?php echo $item['subtitle'] ?></h5>
                            <p class="py-4"><?php echo $item['text'] ?></p>
                            <a href="<?php echo $item['website'] ?>" class="btn btn-primary" target="_blank" rel="nofollow noreffer noopener">Bekijk website <i class="fas fa-arrow-right"></i></a>
                        </div>

                        <div class="col-12 col-md-6">
                            <figure>
                                <img class="img-fluid" src="<?php echo $item['img'] ?>" alt="<?php echo $item['img-alt'] ?>">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <?php endforeach; ?>
        </article>
    </main>
    <!-- Footer -->
    <?php 
        // Get Footer
        include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/footer.php');

        // Get Scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/scripts.php');
    ?>
</body>

</html>