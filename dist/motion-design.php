<?php
  // Get Head
  include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/template-parts/head.php');

  $user = $CONFIG['USERS']['Andrew'];
?>
<link rel="stylesheet" href="assets/css/pages/detailpage/detail.min.css">
<link rel="stylesheet" href="assets/css/pages/detailpage/andrew/andrew.min.css">

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
            <?php foreach($CONFIG['USERS']['Andrew']['portfolio'] as $item): ?>
            <section id="<?php echo $item['id'] ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h2><?php echo $item['title'] ?></h2>
                            <h5><?php echo $item['subtitle'] ?></h5>
                            <p class="py-4"><?php echo $item['text'] ?></p>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class='embed-container'>
                                <iframe style="width: 100%;" src="<?php echo $item['video'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
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