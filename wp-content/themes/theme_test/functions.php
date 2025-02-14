<?php

//Gutenberg est le nouvel éditeur de contenue propre à wordpress
//il ne nous intéresse pas pour le thème que nous allons crée. On vas donc le désactiver :
// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' ); /*post*/

// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

/*ici on retir le script du front-end.      Disable default front-end styles. */
add_action( 'wp_enqueue_scripts', function() { /*enqueue = au moment ou on en aura besoin on vas charger ce dont on à besoin*/
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );

    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );

    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );

/*c'est un controleur, on met un peut tout dedans. Que du php et pas de html*/



/*Vue que l'interface que l'utilisateur vas utilisée et pas intuitive, alors on fait ça pour le rendre plus intuitive dans l'utilisation*/