<?php  /*modele de base index.php*/
    get_header();

?>
    <h2>Front-page.php</h2>
    <div id="entete" class="global">
        <section class="entete__header">
            <h1 class ="bgc-text"><?php echo get_bloginfo('name')?></h1>
            <h2 class ="bgc-text"><?php echo get_bloginfo('description')?></h2>
            <h5 class ="bgc-text">TIM, Collège de Maisonneuve</h5>
            <button class="entete__button">
                <a href="https://www.larousse.fr/dictionnaires/francais/inscription/43287">Inscriptions</a>
            </button>
            <hr>
        </section>
        <?php get_template_part('gabarit/vague');?>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil (h2)</h2>
            <div class="section__cours">
                <?php if(have_posts()):
                        while(have_posts()): the_post();
                        // strpos();  --- permet de retier la duree du cours et autres                
                ?>
                            <div class="carte"> 
                               <h5><?php the_title(); ?></h5>
                                <p><?php echo wp_trim_words(get_the_content(), 10, "...");?></p>
                            </div>
                            <?php endwhile;?>
                        <?php endif;?>
            </div>
        </section>
    </div>
    <div id="galerie" class="global diagonale">
        <section class="galerie__section">
            <h2>Galerie (h2)</h2>
            <h4>mes images (h4)</h4>
            <p>Bacon ipsum dolor amet burgdoggen brisket boudin cow ham hock sirloin. Turducken short loin andouille spare ribs pork bresaola cow. Cupim chicken alcatra, sirloin salami capicola ham hock kevin jerky. Burgdoggen brisket drumstick pork chop capicola. Burgdoggen boudin pastrami filet mignon landjaeger, shoulder tenderloin rump short ribs t-bone bresaola sausage drumstick turkey shankle. Corned beef filet mignon hamburger tongue. Swine tri-tip buffalo, t-bone tenderloin shoulder pastrami corned beef. Kevin andouille prosciutto doner pork fatback venison leberkas buffalo. Picanha bresaola pork tri-tip porchetta. Andouille fatback flank chicken, pig brisket pork chop. Sausage boudin bacon jerky spare ribs. Strip steak buffalo alcatra tri-tip bacon bresaola shankle. Pancetta picanha ribeye drumstick.</p>
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