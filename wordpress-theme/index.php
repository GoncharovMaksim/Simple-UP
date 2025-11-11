<?php
/**
 * Основной шаблон WordPress
 */
get_header();
?>

<main id="main-content">
    <?php
    // Использование шорткодов
    echo do_shortcode('[simple_up_hero title="Добро пожаловать в Simple UP" description="Мы создаем современные решения для вашего бизнеса. Профессиональный подход и качественный результат гарантированы." button_text="Начать работу" button_link="#"]');
    
    echo do_shortcode('[simple_up_features title="Наши возможности" columns="4"]');
    
    echo do_shortcode('[simple_up_process title="Как мы работаем"]');
    ?>
</main>

<?php
get_footer();
?>

