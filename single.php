<?php  /*modele de base index.php*/
    get_header();
    $category = get_queried_object();
    if($category){
        $_nomCategori = $category->name;
    }
?>
    <div id="accueil" class="global">
        <section id="single__contenu" class="accueil__section bck-primaire-100">
                <?php if(have_posts()):
                        while(have_posts()): the_post();
                        // strpos();  --- permet de retier la duree du cours et autres                
                ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content();?></p>
                        <p>Température minimun :<?php the_field("temperature_minimum");?></p>
                        <p>Température maximum :<?php the_field("temoerature_maximum");?></p>
                        <p>Ville avoisinante :<?php the_field("villes_avoisinantes");?></p>
                        <p>Appréciation :<?php the_field("appreciation");?></p>
                    <?php endwhile;?>
                <?php endif;?>
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
    <div id="reservation" class="global">
        <section>
            <h2>Réserver</h2>
            <p>Veillez choisir une date pour votre voyage.</p>
            <div class="calendrier">
                <div class="month">
                    <ul>
                        <li class="prev">&#10094;</li>
                        <li class="next">&#10095;</li>
                        <li>Juillet<br><span style="font-size:18px">2024</span></li>
                    </ul>
                </div>
                <ul class="weekdays">
                    <li>Lundi</li>
                    <li>Mardi</li>
                    <li>Mercredi</li>
                    <li>Jeudi</li>
                    <li>Vendredi</li>
                    <li>Samedi</li>
                    <li>Dimanche</li>
                </ul>
                <ul class="days">
                    <li><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                    <li><span>5</span></li>
                    <li><span>6</span></li>
                    <li><span>7</span></li>
                    <li><span>8</span></li>
                    <li><span>9</span></li>
                    <li><span>10</span></li>
                    <li><span>11</span></li>
                    <li><span>12</span></li>
                    <li><span>13</span></li>
                    <li><span>14</span></li>
                    <li><span>15</span></li>
                    <li><span>16</span></li>
                    <li><span>17</span></li>
                    <li><span>18</span></li>
                    <li><span>19</span></li>
                    <li><span class="active">20</span></li>
                    <li><span>21</span></li>
                    <li><span>22</span></li>
                    <li><span>23</span></li>
                    <li><span>24</span></li>
                    <li><span>25</span></li>
                    <li><span>26</span></li>
                    <li><span>27</span></li>
                    <li><span>28</span></li>
                    <li><span>29</span></li>
                    <li><span>30</span></li>
                    <li><span>31</span></li>
                </ul>
            </div>
            <button class="entete__button reservation__button">
                <a href="">Réservation</a>
            </button>
        </section>
    </div>

    <?php 
    // recuperer le fichier footer.php
    get_footer();
    ?>
</body>
</html>