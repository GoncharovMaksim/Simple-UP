<?php
/**
 * Template Name: Full Page with Shortcodes
 * 
 * Шаблон страницы с полной версткой из макета Figma
 * Используйте этот шаблон для страниц с шорткодами
 */
get_header();
?>

<main id="main-content">
    <?php
    // Проверяем, есть ли контент на странице
    if (have_posts()) :
        while (have_posts()) : the_post();
            // Выводим контент страницы (шорткоды будут обработаны автоматически)
            the_content();
        endwhile;
    else :
        // Если контента нет, выводим шорткоды по умолчанию
        echo do_shortcode('[simple_up_hero title="Добро пожаловать в Simple UP" description="Мы создаем современные решения для вашего бизнеса. Профессиональный подход и качественный результат гарантированы." button_text="Начать работу" button_link="#"]');
        echo do_shortcode('[simple_up_features title="Наши возможности" columns="4"]');
        echo do_shortcode('[simple_up_process title="Как мы работаем"]');
    endif;
    ?>
</main>

<?php
get_footer();
?>

