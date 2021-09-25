<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Карта инициатив</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/assets/font-aw/css/font-awesome.min.css">
    <?php 
        wp_head();
    ?>
</head>
<body>
    <div class="container-fluid navbar">
        <div class="container header">


            <?php
                wp_nav_menu( [
                    'menu'            => 'Main',
                    'container'       => false,
                    'menu_class'      => 'navbar',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                    'walker'          => '',
                ] );

            ?>
              <!--   <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Главная</a>
                <a href="lenta.html"><i class="fa fa-bars" aria-hidden="true"></i>Лента</a>
                <a href="map.html" class="active"><i class="fa fa-map" aria-hidden="true"></i>Карта</a>
                <a href="about.html"><i class="fa fa-info-circle" aria-hidden="true"></i>О проекте</a>
                <a href="#" class="profile"><i class="fa fa-user" aria-hidden="true"></i>Личный кабинет</a> -->
        </div>
    </div>
