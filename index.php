<?php
/**
 * @Author Matthew Lessard
 * Page index pour le tp2
 */
get_header();
?>
<div class="contenu_principal">
    <div class="contenu_secondaire">
        <hr class="ligne_titre">
            <h1 id="titre_page">Formation PUB020 : WordPress, 2023</h1>
        <hr class="ligne_titre">
    </div>
    <div class="formation">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => -1,
        ));

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                    <div class="article">
                        <hr class="ligne_article">
                            <h2 class="titre_article">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        <hr class="ligne_article">
                    </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo 'No posts found';
        }
        ?>

    </div>
</div>
<br>
    <hr class="ligne_pub">
    <div class="pub-bas-page">
        <div class="pub-hebergement">
            <p>Site fièrement hébergé chez
                <a href="https://www.a2hosting.com/?aid=5ca65a17be949%2F" target="_top">A2 Hosting.</a>
            </p>
            <p>
                <a href="https://www.a2hosting.com/?aid=5ca65a17be949&bid=ed1c4a67/" target="_top">
                    <img src="//affiliates.a2hosting.com/accounts/default1/banners/ed1c4a67.jpg" alt="" title="" width="728" height="90">
                </a>
                <img style="border:0" src="https://affiliates.a2hosting.com/scripts/imp.php?aid=5ca65a17be949&amp;bid=ed1c4a67" width="1" height="1" alt="">
            </p>
        </div>
    </div>
    <hr class="ligne_pub">
<br>
<?php
get_footer();
?>
