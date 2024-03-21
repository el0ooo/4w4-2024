<?php  /*modele de base index.php*/
    get_header();
    $diapoAleatoire = rand(1, 3);
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
    <div id="accueil" class="global clr-agencement-primaire">
        <section class="accueil__section">
            <h2>Destinations populaires</h2>
            <div class="section__cours">
                <?php if(have_posts()):
                        while(have_posts()): the_post();      
                ?>
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
    <div id="galerie" class="global">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <h4>Photos de voyage</h4>
            <div id="<?php if($diapoAleatoire == 1):?>diaporama-pliene-nature<?php endif; ?><?php if($diapoAleatoire == 2):?>diaporama-sport<?php endif; ?><?php if($diapoAleatoire == 3):?>diaporama-aventure<?php endif; ?>"></div>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Evenement</h2>
            <div class="groupe-info">
                <h5>Via ferrata</h5>
                <p>Bacon ipsum dolor amet fatback rump hamburger porchetta chicken pork. Tenderloin andouille cow spare ribs, chicken tri-tip meatball bacon flank capicola sirloin pig leberkas. Spare ribs biltong pork, prosciutto sirloin cow pastrami tail turducken. Rump shoulder salami tail.</p>
                <p>Achalandage<meter optimum="40" high="80" max="100" value="10">10%</meter></p>
                <details>
                    <summary>En savoir plus</summary>
                    <p>Pour plus d'information, visitez le site de la via ferrata</p>
                    <a href="https://via-ferrata-dolomites.com/">Via ferrata dans les dolomites</a>
                </details>
            </div>
            <h5>Vente de vetements</h5>
            <button>
                <a href="https://github.com/el0ooo">Vêtements</a>
            </button>
        </section>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
