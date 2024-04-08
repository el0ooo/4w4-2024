<?php  /*modele de base index.php*/
    get_header();
    if (isset($_GET['s'])) {
        $recherche = $_GET['s'];
        // Now you can use $user_input variable to do something with the user input
    }

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
    <div id="recherche__utilisateur" class="global">
        <h2>Votre recherche : <?php echo $recherche;?></h2>
        <div id="recherche_carte" class="section__cours">
                <?php if(have_posts()):
                        while(have_posts()): the_post();      
                ?>
                        <div class="carte bck-primaire-100"> 
                            <h5><?php the_title(); ?></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 10, "...");?></p>
                            <?php the_post_thumbnail("thumbnail");?>
                            <p class="categori__carte"><?php the_category();?></p>
                            <p><a href= "<?php echo get_permalink()?>">Voir la suite</a></p>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
                <?php if (!have_posts()){
                    echo "<h5>Aucun résultat trouvé</h5>";}
                ?>

            </div>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
