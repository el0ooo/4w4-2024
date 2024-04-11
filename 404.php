<?php  /*modele de base index.php*/
    get_header();
    $diapoAleatoire = rand(1, 7);
?>
    <div id="entete" class="global">
        <section class="entete__header">
            <h1 class ="bgc-text"><?php echo get_bloginfo('name')?></h1>
            <h2 class ="bgc-text"><?php echo get_bloginfo('description')?></h2>
            <h5 class ="bgc-text">TIM, Collège de Maisonneuve</h5>
            <button class="entete__button">
                <a href="https://www.larousse.fr/dictionnaires/francais/inscription/43287">Inscriptions</a>
            </button>
        </section>
    </div>
    <div class="erreure">
        <h3>Aucune information correspond à votre recherche.</h3>
        <p>Veillez réessayer</p>
    </div>
    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
