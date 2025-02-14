<?php /* Template Name: Page "Contactez-moi" */?>
<?php get_header(); ?>
    <aside>
        <h2>Contactez-moi</h2>
    </aside>

<?php
//on ouvre la boucle "the loop", la structure de controle
//de contenu propre à wordpress
if(have_posts()): while(have_posts()): the_post(); ?>

    <div><?= get_the_content(); ?></div>

<?php
    //on ferme "la boucl" (the loop). Ca mais ça si il trouve pas la page
endwhile; else: ?>
    <p>La page est vide.</p>
<?php endif; ?>
<?php get_footer(); ?><?php
