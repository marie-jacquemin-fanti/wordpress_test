<?php get_header(); ?>
    <style type="text/css">
        .recipe {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
        .recipeingredients {
            width: 320px;
            padding: 20px;
            background: #f1f1f1;
            display: flex;
            flex-direction: column-reverse;
        }
        .recipefig {
            display: block;
            position: relative;
            width: 100%;
            height: 0;
            padding-top: 100%;
            margin: 0;
        }
        .recipe__img {
            display: block;
            position: absolute;
            top:0;
            left:0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
<?php
//on ouvre la boucle "the loop", la structure de controle
//de contenu propre à wordpress
if (have_posts()): while (have_posts()): the_post(); ?>

    <h2><?= get_the_title(); ?></h2>
<p><?= get_the_excerpt()?></p>

<div class="recipe"></div>

<aside class="recipe_ingredients">
    <div>
        <h3>Ingrédient</h3>
        <p>A compléter</p>
    </div>
    <figure class="recipe_fig">
        <?= get_the_post_thumbnail(size: 'medium', attr: ['class'=>'recipe_img']); ?>
    </figure>
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