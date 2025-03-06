<?php
function yukaichou_enqueue_fonts() {
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap', false);
    wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false);
    wp_enqueue_style('Inter-Tight', 'https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap', false);
}
add_action('wp_enqueue_scripts', 'yukaichou_enqueue_fonts');
?>
