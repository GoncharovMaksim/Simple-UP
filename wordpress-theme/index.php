<?php
/**
 * Основной шаблон WordPress
 * Три экрана точно по макетам Figma
 */
get_header();
?>

<main id="main-content">
    <?php
    // ЭКРАН 1: Hero Section с кейсами и статистикой
    echo do_shortcode('[simple_up_hero]');
    
    // ЭКРАН 2: Проблемы бизнеса
    echo do_shortcode('[simple_up_problems]');
    
    // ЭКРАН 3: Наши решения
    echo do_shortcode('[simple_up_solutions]');
    ?>
</main>

<?php
get_footer();
?>
