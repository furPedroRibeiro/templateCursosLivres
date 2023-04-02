<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Livres</title>
    <?php
        wp_head();
    ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="icon" type="image/x-icon" href="/assets/favIcon.png">
</head>
<body>
<header class="header">
       <a href="<?=site_url(); ?>">
            <img src="<?=get_template_directory_uri();?>/assets/favIcon.png" alt="Logo de exemplo" width="80px">
        </a>
        <h1>WP - Cursos</h1>
    </header>