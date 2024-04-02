<?php  /*modele de base index.php*/
    get_header();
    $_nbPost = $wp_query->found_posts;
?>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2><?php get_categories()[1];?></h2>
            <h5 class="nb_post">(<?php echo $_nbPost;?>)</h5>
            <div class="section__cours">
                <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>
                        <div class="carte bck-primaire-100"> 
                           <h5><?php the_title(); ?></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 10, "...");?></p>
                            <p class="categori__carte"><?php the_category();?></p>
                            <p><a href= "<?php echo get_permalink()?>">Voir la suite</a></p>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </section>
    </div>
    <div id="galerie" class="global ">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <!-- vouloir faire en sorte d'afficher un diaporama avec des images de la categorie active -->
            <div id="diaporama-aventure"></div>
        </section>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>