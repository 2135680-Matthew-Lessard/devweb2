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
    <script defer src="/wp-content/themes/devweb2/js/js_index.js"></script>
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
                <a class="icone" href="http://127.0.0.1/wordpress/">
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
<div id="popup_authentification_principale">

    <div class="fermeture_popup">
        <div class="sous_fermeture">
            <i class="fa-solid fa-x"></i>
        </div>
    </div>

    <div id="popup_authentification">
        <div class="message_erreur"></div>
            <div id="contenu_formulaire">
                <form action="#" method="post" id="formulaire_login">

                    <div class="container_formulaire premier_container">
                        <label for="login">*Usager: </label>
                        <div class="sous_container_input">
                            <input type="text" id="login" class="input input_usager">
                        </div>
                    </div>
                    <div class="container_formulaire deuxieme_container">
                        <label for="password">*Mot de passe: </label>
                        <div class="sous_container_input">

                            <input type="password" id="password" class="input input_mot_de_passe">
                        </div>
                    </div>
                    <div class="container_formulaire troisieme_container">
                        <div id="sous_container_checkbox">
                            <label for="checkbox"><input type="checkbox" name="resterconnecte" id="checkbox"> Rester connecté</label>
                        </div>
                    </div>

                    <div  class="container_formulaire">
                        <a type="submit" class="soumettre_formulaire bouton" href="#">Soumettre</a>
                    </div>

                    <div class="container_formulaire">
                        <a class="nouvel_usager" href="#">Nouvel usager</a>
                    </div>

                </form>
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