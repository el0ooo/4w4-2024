<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme de Yuri Eloi Chayer</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>">
    <!-- <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div id="menu" class="global">
        <div class="entete__menu">
            <?php wp_nav_menu();?>
        </div>
    </div>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1 class ="bgc-text">Theme de Eloi Chayer (h1)</h1>
            <h2 class ="bgc-text">4W4 - Conception d'interface <span>et développement Web</span></h2>
            <h5 class ="bgc-text">TIM - Collège de Maisonneuve</h5>
            <button class="entete__button">
                <a href="https://www.larousse.fr/dictionnaires/francais/inscription/43287">Inscriptions</a>
            </button>
            <hr>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" style="fill:var(--couleur-arriere-acceuil)"></path>
            </svg>
        </div>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil (h2)</h2>
            <div class="section__cours">
                <?php if(have_posts()):
                        while(have_posts()): the_post();
                $titre = get_the_title();
                $sigle = substr($titre, 0, 7); 
                $tempsPosition = strpos($titre, "(");
                $temps = substr($titre, $tempsPosition);
                $titre = trim(substr($titre, 8), $temps);
                // strpos();  --- permet de retier la duree du cours et autres                
                ?>
                            <div class="carte"> 
                                <p><?php echo $sigle ?></p>
                               <h5><?php echo $titre; ?></h5>
                                <p><?php echo wp_trim_words(get_the_content(), 10, "...");?></p>
                                <p>durée : <?php echo $temps; ?></p>
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
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M892.25 114.72L0 0 0 120 1200 120 1200 0 892.25 114.72z" style="fill:var(--couleur-arriere-footer)"></path>
            </svg>
        </div>
    </div>
    <div id="footer" class="global">
        <section class="footer__section">
            <h2>Footer (h2)</h2>
                <form class="recherche" action="">
                    <input type="search" class="recherche__input" placeholder="Recherche">
                    <button class="recherche__button">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </button>
                </form>
                <div class="sociaux">
                   <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg></a>
                   <a href=""><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path fill="none" d="M0 0h24v24H0z"></path><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path></svg></a>
                   <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>WordPress icon</title><path d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"></path></svg></a>
                   <a href=""><svg width="24" height="24" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><title>YouTube icon</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path></svg></a>
                   <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path></svg></a>
                   <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn icon</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path></svg></a>
                   <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>Pinterest icon</title><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"></path></svg></a>
                   <a href=""><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M11.571 4.714h1.715v5.143H11.57zm4.715 0H18v5.143h-1.714zM6 0L1.714 4.286v15.428h5.143V24l4.286-4.286h3.428L22.286 12V0zm14.571 11.143l-3.428 3.428h-3.429l-3 3v-3H6.857V1.714h13.714z"></path></svg></a>
                   <a href=""><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg"><title>Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"></path></svg></a>
                </div>
                <small>Créé par Yuri Eloi Chayer &copy;</small>
        </section>
    </div>
</body>
</html>