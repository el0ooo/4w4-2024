<?php  /*modele de base index.php*/
    get_header();

?>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Catégorie</h2>
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
            <h2>Galerie (h2)</h2>
            <h4>mes images (h4)</h4>
            <p>Bacon ipsum dolor amet burgdoggen brisket boudin cow ham hock sirloin. Turducken short loin andouille spare ribs pork bresaola cow. Cupim chicken alcatra, sirloin salami capicola ham hock kevin jerky. Burgdoggen brisket drumstick pork chop capicola. Burgdoggen boudin pastrami filet mignon landjaeger, shoulder tenderloin rump short ribs t-bone bresaola sausage drumstick turkey shankle. Corned beef filet mignon hamburger tongue. Swine tri-tip buffalo, t-bone tenderloin shoulder pastrami corned beef. Kevin andouille prosciutto doner pork fatback venison leberkas buffalo. Picanha bresaola pork tri-tip porchetta. Andouille fatback flank chicken, pig brisket pork chop. Sausage boudin bacon jerky spare ribs. Strip steak buffalo alcatra tri-tip bacon bresaola shankle. Pancetta picanha ribeye drumstick.</p>
        </section>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
</body>
</html>