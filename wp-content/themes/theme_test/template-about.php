<?php /* Template Name: Page "A propos" */?>
<?php get_header(); ?>
    <aside>
        <h2>A propo de moi</h2>
    </aside>

<?php
//on ouvre la boucle "the loop", la structure de controle
//de contenu propre à wordpress
if(have_posts()): while(have_posts()): the_post(); ?>



    <div><?= get_the_content(); ?></div>

<?php
    //on ferme "la boucl" (the loop)
endwhile; else: ?>
    <p>La page est vide.</p>
<?php endif; ?>
<?php get_footer(); ?>