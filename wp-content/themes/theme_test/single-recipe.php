<?php get_header(); ?>
    <style type="text/css">
        .recipe{
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
        .recipe_ingredients{
            width: 320px;
            padding: 20px;
            background: #f1f1f1;
        }
    </style>
<?php
//on ouvre la boucle "the loop", la structure de controle
//de contenu propre à wordpress
if (have_posts()): while (have_posts()): the_post(); ?>

    <h2><?= get_the_title(); ?></h2>

<div class="recipe"></div>

<aside class="recipe_ingredients">
    <h3>Ingrédient</h3>
    <p>A compléter</p>
</aside>
<section class="recipe_steps">
    <h3>Etapes</h3>
    <div><?= get_the_content(); ?></div>
</section>

<?php
    //on ferme "la boucl" (the loop)
endwhile;
else: ?>
    <p>Cette recette existe pas</p>
<?php endif; ?>
<?php get_footer(); ?>