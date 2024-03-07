<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme de Yuri Eloi Chayer</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>">
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div id="menu">
        <header class="entete__menu">
            <?php wp_nav_menu(array("container" => "nav"));?>
        </header>
    </div>