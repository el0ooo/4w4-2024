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
    <div id="accueil" class="global clr-agencement-primaire">
        <section class="accueil__section">
            <h2>Destinations populaires</h2>
            <div id="populaire" class="section__cours">
                <?php if(have_posts()):
                        while(have_posts()): the_post();      
                        $maCategorie = "carte";
                        get_template_part('gabarit/categorie', $maCategorie);
                ?>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
            <h2>Catégories de voyage</h2>
            <div id="categorie__section" class="section__cours">
                <?php
                    foreach(get_categories() as $category_id):
                        if($category_id->name != "galerie" ):
                        $cat_nom = $category_id->name;
                        $cat_description = wp_trim_words($category_id->description, 10, "...");
                        $cat_lien = get_category_link($category_id->term_id);
                        
                ?>
                    <div class="carte bck-primaire-100">
                        <h5><?php echo $cat_nom;?></h5>
                        <p><?php echo $cat_description;?></p>
                        <p><?php echo $category_id->count;?> destinations a découvrir</p>
                        <p><a href="<?php echo $cat_lien;?>">Voir la catégorie</a></p>
                    </div>
                    <?php endif;?>
               <?php endforeach;?>
            </div>
        </section>
    </div>
    <div id="galerie" class="global">
        <section class="galerie__section">
            <h2>Galerie</h2>

            <?php
// Appel du shortcode directement dans le fichier front-page.php
echo do_shortcode('[em_destination]');
?>

            <h4>Photos de voyage</h4>
            <?php if(have_posts()):
                        while(have_posts()): the_post();      
                        $maCategorie = "galerie";
                        get_template_part('gabarit/categorie', $maCategorie);
                ?>
                    <?php endwhile;?>
                <?php endif;?>
            <div id="<?php if($diapoAleatoire == 1):?>diaporama-pliene-nature<?php endif; ?><?php if($diapoAleatoire == 2):?>diaporama-sport<?php endif; ?><?php if($diapoAleatoire == 3):?>diaporama-aventure<?php endif; ?><?php if($diapoAleatoire == 4):?>diaporama-croisiere<?php endif; ?><?php if($diapoAleatoire == 5):?>diaporama-culture<?php endif; ?><?php if($diapoAleatoire == 6):?>diaporama-repos<?php endif; ?><?php if($diapoAleatoire == 7):?>diaporama-zen<?php endif; ?>">
            </div>
        </section>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
