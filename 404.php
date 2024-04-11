<?php  /*modele de base index.php*/
    get_header();
    $diapoAleatoire = rand(1, 7);
?>
    <div class="erreure">
        <div class="information-erreur">
            <h1>Eurreur 404</h1>
            <p>Vous essayez d'acceder à une page qui n'existe pas.</p>
            <p>Pour revenir à la page d'accueil cliquer sur le lien suivant.</p>
            <button class="entete__button">
                <a href="<?php echo get_home_url(); ?>">Retour à la page d'accueil</a>
            </button>
            
            <div class="recherche-erreur"><?php get_search_form(); ?></div>
            <div class="liens">
                    <?php wp_nav_menu(array(
                        "menu"=> "footer",
                        "container" => "nav"));?>
            </div>
        </div>
        <div id="image-erreur"></div>
    </div>
    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
