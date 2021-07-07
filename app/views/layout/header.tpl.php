<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Harry Potter</title>

    <!-- We can still have our own CSS file -->
    <link rel="stylesheet" href="<?=$assetsBaseUri ?>css/style.css">
</head>

<body>
<div class="site-container">
    <div class="site-pusher">
        <header class="header">
            <a href="" class="header__icon" id="header__icon"></a>
            <a href="<?= $router->generate('main-home') ?>" class="header__logo" >Harry Potter</a>

   
    <?php
    // On inclut des sous-vues => "partials"
    include __DIR__.'/../partials/nav.tpl.php';
    include __DIR__.'/../partials/flash.tpl.php';
    ?>

        </header>