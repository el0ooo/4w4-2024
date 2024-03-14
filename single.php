<?php  /*modele de base index.php*/
    get_header();

?>
    <div id="accueil" class="global">
        <section class="accueil__section">
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
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Evenement (h2)</h2>
            <div class="groupe-info">
                <h5>Patin sur glace exterrieur (h5)</h5>
                <p>Bacon ipsum dolor amet fatback rump hamburger porchetta chicken pork. Tenderloin andouille cow spare ribs, chicken tri-tip meatball bacon flank capicola sirloin pig leberkas. Spare ribs biltong pork, prosciutto sirloin cow pastrami tail turducken. Rump shoulder salami tail.</p>
                <p>Achalandage<meter optimum="40" high="80" max="100" value="50">85%</meter></p>
                <details>
                    <summary>En savoir plus</summary>
                    <p>Pour plus d'information, visitez le site de la patinoire</p>
                    <a href="https://patinoireduvieuxport.com/">Patinoire du Vieux port</a>
                </details>
            </div>
            <h5>Vente de vetements (h5)</h5>
            <button>
                <a href="https://github.com/el0ooo">Vêtements</a>
            </button>
        </section>
        <?php get_template_part('gabarit/vague');?>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
</body>
</html>