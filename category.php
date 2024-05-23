<?php  /*modele de base index.php*/
    get_header();
    $category = get_queried_object();
    if($category){
        $_nomCategori = $category->name;
    }
?>
<div class="bouncing-blobs-container">
        <div class="bouncing-blobs-glass"></div>
            <div class="bouncing-blobs">
                <div class="bouncing-blob bouncing-blob--blue"></div>
                <div class="bouncing-blob bouncing-blob--blue"></div>
                <div class="bouncing-blob bouncing-blob--blue"></div>
                <div class="bouncing-blob bouncing-blob--white"></div>
                <div class="bouncing-blob bouncing-blob--purple"></div>
                <div class="bouncing-blob bouncing-blob--purple"></div>
                <div class="bouncing-blob bouncing-blob--pink"></div>
            </div>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2><?php echo $_nomCategori;?></h2>
            <div class="section__cours">
                <?php if(have_posts()):
                    while(have_posts()): the_post(); ?>
                        <div class="carte bck-primaire-100"> 
                           <h5><?php the_title(); ?></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 10, "...");?></p>
                            <?php the_post_thumbnail("thumbnail");?>
                            <p class="categori__carte"><?php the_category();?></p>
                            <p><a href= "<?php echo get_permalink()?>">Voir la suite</a></p>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </section>
    </div>
    <!-- lorsqu'on choisit la categorie sport, l'animation de sport ne marche pas -->
    <?php if($_nomCategori != "Populaire" || $_nomCategori != "voyage en famille" || $_nomCategori != "Voyage en groupe" || $_nomCategori != "voyage solo"){?>
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