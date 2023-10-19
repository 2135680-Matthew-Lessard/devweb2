<?php
/**
 * @Author Matthew Lessard
 * Page header pour le site Apical
*/
?>
<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <title>Apical | Formation PUB020 : WordPress</title>
    <?php wp_head(); ?>
</head>

<body id="messtyles">
<div class="entete">
    <div class="container">
        <div class="avant"></div>
        <div class="centre">
            <a href="https://apical.xyz">
                <img class="image_apical" src="https://apical.xyz/medias/fr/LogoApical-blanc.svg" alt="Apical, ma plateforme d'apprentissage">
            </a>
        </div>
        <div class="apres">
            <div id="menuicones">
                <a class="icone" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg" alt="Accueil" title="Accueil">
                </a>
                <a class="icone" href="#" class="recherche ouvrirpopuprecherche dropdown-toggle" data-target="#popuprecherche">
                    <img src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche" title="Rechercher">
                </a>
                <a class="icone" href="#" class="icone ouvrirpopupauthentification" data-target="#popupauthentification">
                    <img src="https://apical.xyz/medias/commun/Login-MenuSecondaire.svg" alt="Authentification" title="Créé en lot Créé en lot">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="barre_nav">
    <?php
    $pages = get_pages();
    ?>
    <ul class="navbar-nav">
        <?php foreach ($pages as $page) : ?>
            <li>
                <a href="<?php echo get_permalink($page->ID); ?>"><?php echo esc_html($page->post_title); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<br>