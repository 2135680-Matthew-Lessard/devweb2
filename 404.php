<?php
/**
 * @Author Matthew Lessard
 * Page d'erreur 404 pour le site Apical
 */
get_header();
?>
    <div class="container_404">
        <div class="page_404">
            <h1 id="titre_404">Cette page n'existe pas</h1>
            <p id="texte_404">La page que vous tentez d'accéder n'existe pas</p>
            <ul id="lien_404">
                <li>
                    <a class="page_404_accueil" href="index.php">Accueil</a>
                </li>
            </ul>
        </div>
    </div>
<?php
get_footer();
?>