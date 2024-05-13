<?php
// gabarit permettant d'afficher les cartes des destinations populaires
?>

<div class="carte bck-primaire-100"> 
    <h5><?php the_title(); ?></h5>
    <p><?php echo wp_trim_words(get_the_content(), 10, "...");?></p>
    <p>Proche de <?php the_field("ville_avoisinante");?></p>
    <p class="categori__carte"><?php the_category();?></p>
    <p><a href= "<?php echo get_permalink()?>">Voir la suite</a></p>
</div>