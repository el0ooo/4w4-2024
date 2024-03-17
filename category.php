<?php  /*modele de base index.php*/
    get_header();

?>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2><?php the_category();?></h2>
            <div class="section__cours">
                <?php if(have_posts()):
                        while(have_posts()): the_post();
                        // strpos();  --- permet de retier la duree du cours et autres                
                ?>
                            <div class="carte"> 
                               <h5><?php the_title(); ?></h5>
                                <p><?php echo wp_trim_words(get_the_content(), 10, "...");?></p>
                                <p><a href= "<?php echo get_permalink()?>">Voir la suite</a></p>
                            </div>
                            <?php endwhile;?>
                        <?php endif;?>
            </div>
        </section>
    </div>
    <div id="galerie" class="global diagonale">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <h4><?php the_category();?></h4>
            <div id="diaporama-aventure"></div>
        </section>
    </div>
    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
</body>
</html>