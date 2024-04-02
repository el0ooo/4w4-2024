<?php  /*modele de base index.php*/
    get_header();
    $_nomCategori = get_the_category()[0]->name;
?>
    <div id="accueil" class="global">
        <section id="single__contenu" class="accueil__section bck-primaire-100">
                <?php if(have_posts()):
                        while(have_posts()): the_post();
                        // strpos();  --- permet de retier la duree du cours et autres                
                ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content();?></p>
                    <?php endwhile;?>
                <?php endif;?>
        </section>
    </div>
    <div id="galerie" class="global">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <h4><?php echo $_nomCategori; ?></h4>
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
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>À faire</h2>
            <div class="groupe-info">
                <h5>Activité</h5>
                <p>Bacon ipsum dolor amet fatback rump hamburger porchetta chicken pork. Tenderloin andouille cow spare ribs, chicken tri-tip meatball bacon flank capicola sirloin pig leberkas. Spare ribs biltong pork, prosciutto sirloin cow pastrami tail turducken. Rump shoulder salami tail.</p>
            </div>
        </section>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
</body>
</html>