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
<body class="clr-agencement-primaire">
    <div id="menu">
        <header class="entete__menu">
            <input id="chk_burger" type="checkbox">
            <label id="burger" for="chk_burger">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zm0 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </label>
            <?php echo get_custom_logo();?>
            <?php wp_nav_menu(array(
                "menu"=> "principal",
                "container" => "nav"));
                get_search_form();    
            ?>
        </header>
    </div>
    <div class="filtre__grain"></div>