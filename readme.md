# TP2 - club de voyage #
### Réaliser par Yuri Eloi Chayer
#### Groupe 2

## Description du TP2 : 
Objectifs du TP2:
•	Améliorer notre site de voyage en y ajoutant les fonctionnalités :
•	Un carrousel d’images qui affiche les images d’une galerie.
•	Des champs personnalisés qui permettront de décrire les destinations de façon plus précises
•	Des filtres utilisant la REST API de Wordpress permettant d’extraire les destinations répondant à certains critères 
•	Des animations permettant de rehausser le niveau d’interactivité du site
•	De nouveaux gabarits pour organiser efficacement le contenu

Catégories de voyage :
o	Utiliser les mêmes catégories que vous avez utilisés dans la version du TP1

Carrousel d’images
Le carrousel permet d’afficher les images d’une galerie. Voici  les fonctionnalités de Navigation :
-	Une série de boutons radio permettant d’accéder à chacune des images
-	Deux flèches « Précédent » et « Suivant »
-	En cliquant sur une image de la galerie le carrousel s’affiche avec l’image sélectionné
-	Le changement d’image est animé
-	La dimension de la boîte modale s’adapte aux proportions de l’image source


Champs personnalisés
Exemple de champs personnalisée :
-	Température minimum/maximum/moyen
-	Précipitation annuelle
-	Ville avoisinante
-	Appréciation (1 à 5 avec *)

Filtres d’extraction
Dans la page d’accueil des filtres dynamique permettent d’obtenir un résultat directement sans avoir à actualiser la page globalement. Il s’agit ici d’utiliser la REST API de Wordpress

Animations
-	Améliorer l’interactivité et l’utilisabilité
-	Les animations sont simples et efficaces

Nouveaux gabarits
-	Gabarit pour le formulaire de recherche
-	Pour la création des cartes
-	Modèle de page

Barème de correction (20 points)
Chaque section sera évaluée sur 
-	Le design
-	L’intégration (niveau d’adaptabilité)
-	Fonctionnement
-	La codification générale

1.	Section Entête  (3 points)
header.php
-	Logo
-	Menu
-	Zone de recherche

2.	Section Hero  (3 points)
front-page.php
-	Titre
-	Titre secondaire
-	Texte
-	Image
-	Logo site sociaux
-	Boutons vers annonces destinations spéciales
-	Animations

3.	L’accueil (3 points)
front-page.php
-	Section Filtre REST API
-	Section liste des catégories
-	Section Populaire
-	Galerie d’image avec carrousel
-	Animations

4.	Le pied de page (3 points)
footer.php
-	Liens
-	Adresse du collège
-	Formulaire de recherche
-	Logo sociaux
-	Texte
o	Auteur
o	Adresse github branche tp2
o	Adresse de la Github-page
o	Description du tp2
o	image

5.	Une destination de voyage (3 points)
single.php
-	Une seule destination à la fois
-	Titre
-	Description
-	Champs personnalisés
-	Galerie d’images avec carrousel pour les destinations populaires

6.	Liste des destination d’une catégorie (3 points)
category.php
-	Titre de la catégorie
-	Plusieurs destinations sous forme de cartes
-	Les cartes sont animées

7.	Gigthub (2 points)
-	Dépôt du thème (20 commits répartie ) début 15 avril
-	Dépôt du carrousel (20 commits) début 15 avril
-	Readme.md pour le carrousel – lien vers votre site  whc.ca
-	Readme.md pour le thème – lien vers votre site  whc.ca
-	Github page pour la page d’accueil




## URL
### lien vers le serveur distant WHC.ca : https://gftnth00.mywhc.ca/tim35/
### lien vers la page 404 du serveur distant WHC.ca : https://gftnth00.mywhc.ca/tim35/asdasd
### lien vers ma page github : https://el0ooo.github.io/4w4-2024/