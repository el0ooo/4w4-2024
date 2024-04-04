<?php  /*modele de base index.php*/
    get_header();
    $_nomCategori = get_the_category()[0]->name;
?>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2><?php echo $_nomCategori;?></h2>
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
    <?php if($_nomCategori != "Populaire"){?>
    <div id="galerie" class="global ">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <?php if($_nomCategori == "Aventure"){?>
                <div id="diaporama-aventure"></div>
            <?php } else if($_nomCategori == "Sport"){?>
                <div id="diaporama-sport"></div>
            <?php } else if($_nomCategori == "Pleine nature"){?>
                <div id="diaporama-pliene-nature"></div>
            <?php } else if($_nomCategori == "croisière"){?>
                <div id="diaporama-croisiere"></div>
            <?php } else if($_nomCategori == "Culturel"){?>
                <div id="diaporama-culture"></div>
            <?php } else if($_nomCategori == "Repos"){?>
                <div id="diaporama-repos"></div>
            <?php } else if($_nomCategori == "Zen"){?>
                <div id="diaporama-zen"></div>
            <?php }?>
        </section>
    </div>
    <?php }?>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>