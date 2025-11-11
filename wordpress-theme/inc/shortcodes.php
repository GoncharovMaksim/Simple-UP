<?php
/**
 * Шорткоды для Simple UP Theme
 */

// Шорткод для БЛОК 1: Header + Hero Section
function simple_up_hero_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Добро пожаловать в Simple UP',
        'description' => 'Мы создаем современные решения для вашего бизнеса. Профессиональный подход и качественный результат гарантированы.',
        'button_text' => 'Начать работу',
        'button_link' => '#'
    ), $atts);

    ob_start();
    ?>
    <section class="hero-section">
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">Simple UP</a>
                    </div>
                    <nav class="nav">
                        <?php
                        if (has_nav_menu('primary')) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav-list',
                                'container' => false,
                                'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                            ));
                        } else {
                            simple_up_fallback_menu();
                        }
                        ?>
                    </nav>
                    <button class="btn btn-primary">Связаться</button>
                </div>
            </div>
        </header>
        
        <div class="hero-content">
            <div class="container">
                <h1 class="hero-title"><?php echo esc_html($atts['title']); ?></h1>
                <p class="hero-description"><?php echo esc_html($atts['description']); ?></p>
                <a href="<?php echo esc_url($atts['button_link']); ?>" class="btn btn-hero"><?php echo esc_html($atts['button_text']); ?></a>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('simple_up_hero', 'simple_up_hero_shortcode');

// Функция для fallback меню
function simple_up_fallback_menu() {
    echo '<ul class="nav-list">
        <li><a href="' . home_url() . '">Главная</a></li>
        <li><a href="#">О нас</a></li>
        <li><a href="#">Услуги</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>';
}

// Шорткод для БЛОК 6-7: Features Section
function simple_up_features_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Наши возможности',
        'columns' => '4'
    ), $atts);

    // Получаем элементы из атрибутов или используем по умолчанию
    $features = array(
        array('icon' => '🎯', 'title' => 'Целевой подход', 'description' => 'Мы фокусируемся на ваших целях и создаем решения, которые действительно работают.'),
        array('icon' => '⚡', 'title' => 'Быстрая реализация', 'description' => 'Оперативное выполнение задач без потери качества. Результат в кратчайшие сроки.'),
        array('icon' => '🔒', 'title' => 'Надежность', 'description' => 'Безопасные и стабильные решения, которые выдерживают любые нагрузки.'),
        array('icon' => '💡', 'title' => 'Инновации', 'description' => 'Используем передовые технологии и современные подходы в разработке.')
    );

    ob_start();
    ?>
    <section class="features-section">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html($atts['title']); ?></h2>
            <div class="features-grid" style="grid-template-columns: repeat(<?php echo esc_attr($atts['columns']); ?>, 1fr);">
                <?php foreach ($features as $feature) : ?>
                    <div class="feature-item">
                        <div class="feature-icon"><?php echo esc_html($feature['icon']); ?></div>
                        <h3 class="feature-title"><?php echo esc_html($feature['title']); ?></h3>
                        <p class="feature-description"><?php echo esc_html($feature['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('simple_up_features', 'simple_up_features_shortcode');

// Шорткод для БЛОК 8: Process Section
function simple_up_process_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Как мы работаем'
    ), $atts);

    $process_items = array(
        array('icon' => '📋', 'title' => 'Анализ', 'description' => 'Изучаем ваши требования и цели'),
        array('icon' => '🎨', 'title' => 'Дизайн', 'description' => 'Создаем концепцию и прототипы'),
        array('icon' => '⚙️', 'title' => 'Разработка', 'description' => 'Реализуем решение с использованием лучших практик'),
        array('icon' => '✅', 'title' => 'Запуск', 'description' => 'Тестируем и запускаем проект')
    );

    $steps = array(
        array('number' => '1', 'title' => 'Консультация', 'description' => 'Обсуждение проекта и требований'),
        array('number' => '2', 'title' => 'Планирование', 'description' => 'Составление плана и сроков'),
        array('number' => '3', 'title' => 'Реализация', 'description' => 'Выполнение работ по плану'),
        array('number' => '4', 'title' => 'Поддержка', 'description' => 'Сопровождение и улучшения')
    );

    ob_start();
    ?>
    <section class="process-section">
        <div class="container">
            <h2 class="section-title"><?php echo esc_html($atts['title']); ?></h2>
            <div class="process-container">
                <div class="process-items">
                    <?php foreach ($process_items as $item) : ?>
                        <div class="process-item">
                            <div class="process-icon"><?php echo esc_html($item['icon']); ?></div>
                            <div>
                                <h3 class="process-item-title"><?php echo esc_html($item['title']); ?></h3>
                                <p class="process-item-description"><?php echo esc_html($item['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="process-steps">
                    <?php foreach ($steps as $step) : ?>
                        <div class="step">
                            <div class="step-number"><?php echo esc_html($step['number']); ?></div>
                            <div class="step-content">
                                <h4 class="step-title"><?php echo esc_html($step['title']); ?></h4>
                                <p class="step-description"><?php echo esc_html($step['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('simple_up_process', 'simple_up_process_shortcode');

// Регистрация меню
function simple_up_register_menus() {
    register_nav_menus(array(
        'primary' => 'Основное меню'
    ));
}
add_action('after_setup_theme', 'simple_up_register_menus');

