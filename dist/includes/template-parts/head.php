<?php include_once($_SERVER["DOCUMENT_ROOT"] . '/school/fruitfolio/public/includes/functions.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php
    if ($PAGE_INFO['CURRENT_PAGE'] == $_SERVER['REQUEST_URI']) : ?>
        <title><?php echo $PAGE_INFO['TITLE'] ?></title>
    <?php endif; ?>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Own CSS -->
    <link rel="stylesheet" href="assets/css/styles.min.css">

    <!-- FontAwesome 5 -->
    <script src="https://kit.fontawesome.com/11d7524172.js" crossorigin="anonymous"></script>