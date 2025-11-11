<?php
/**
 * Шорткоды для Simple UP Theme
 * Точное соответствие макетам Figma - экраны 1, 2, 3
 */

// Шорткод для ЭКРАН 1: Hero Section с кейсами и статистикой
function simple_up_hero_shortcode($atts) {
    $atts = shortcode_atts(array(
        'tag' => 'SEO КЕЙСЫ',
        'title' => 'УВЕЛИЧИВАЕМ ПРОДАЖИ И ПОМОГАЕМ БРЕНДАМ ПОЛНОСТЬЮ РЕАЛИЗОВАТЬ ПОТЕНЦИАЛ DIGITAL-КОММУНИКАЦИИ',
        'description' => 'Смотрите самые актуальные кейсы по продвижению от нашей digital-компании',
        'button_text' => 'СМОТРЕТЬ КЕЙСЫ',
        'button_link' => '#',
        'stat1_percent' => '95%',
        'stat1_text' => 'клиентов остаются с нами надолго (отток <5% в год)',
        'stat2_percent' => '95%',
        'stat2_text' => 'средний рост трафика за 3-4 месяца - +%',
        'stat3_percent' => '95%',
        'stat3_text' => 'рост лидов / конверсий - +%'
    ), $atts);

    ob_start();
    ?>
    <section class="hero-section screen-1">
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">
                        <a href="<?php echo home_url(); ?>">SimpleUp</a>
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
                    <div class="header-contact">
                        <a href="tel:+79508531784" class="phone">+7 950 853 17 84</a>
                        <div class="social-icons">
                            <a href="#" class="social-icon telegram" aria-label="Telegram"></a>
                            <a href="#" class="social-icon whatsapp" aria-label="WhatsApp"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="hero-background">
            <div class="grid-pattern"></div>
            <div class="chart-bars"></div>
        </div>
        
        <div class="hero-content">
            <div class="container">
                <div class="hero-tag"><?php echo esc_html($atts['tag']); ?> ++</div>
                <h1 class="hero-title"><?php echo esc_html($atts['title']); ?></h1>
                <p class="hero-description"><?php echo esc_html($atts['description']); ?></p>
                <a href="<?php echo esc_url($atts['button_link']); ?>" class="btn btn-hero"><?php echo esc_html($atts['button_text']); ?></a>
            </div>
        </div>
        
        <div class="stats-section">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-percent"><?php echo esc_html($atts['stat1_percent']); ?></div>
                        <div class="stat-text"><?php echo esc_html($atts['stat1_text']); ?></div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-percent"><?php echo esc_html($atts['stat2_percent']); ?></div>
                        <div class="stat-text"><?php echo esc_html($atts['stat2_text']); ?></div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-percent"><?php echo esc_html($atts['stat3_percent']); ?></div>
                        <div class="stat-text"><?php echo esc_html($atts['stat3_text']); ?></div>
                    </div>
                </div>
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
        <li><a href="' . home_url() . '">О нас</a></li>
        <li><a href="#">Услуги</a></li>
        <li><a href="#">Блог</a></li>
        <li><a href="#">SEO Кейсы</a></li>
        <li><a href="#">Контакты</a></li>
    </ul>';
}

// Шорткод для ЭКРАН 2: Почему ваш бизнес теряет клиентов
function simple_up_problems_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Почему Ваш бизнес теряет новых клиентов и бюджет?',
        'solution_text' => 'Мы понимаем эти боли и каждый день решаем их для бизнеса наших клиентов'
    ), $atts);

    $problems = array(
        array(
            'title' => 'Сайт не приносит клиентов',
            'description' => 'Он есть, но заявок нет',
            'image' => 'question',
            'bg_filled' => false
        ),
        array(
            'title' => 'Рекалама сливает бюджет',
            'description' => 'Траты есть, продаж почти нет',
            'image' => 'none',
            'bg_filled' => true
        ),
        array(
            'title' => 'SEO без результатов',
            'description' => 'Подрядчики обещали рост, но трафика нет',
            'image' => 'sleep',
            'bg_filled' => false
        ),
        array(
            'title' => 'Хаос в бизнес-процессах',
            'description' => 'CRM, сайт и реклама не связаны',
            'image' => 'none',
            'bg_filled' => true
        ),
        array(
            'title' => 'Сомнения и недоверие',
            'description' => 'А вдруг снова не получиться?',
            'image' => 'doubt',
            'bg_filled' => true
        ),
        array(
            'title' => 'Нет стратегии',
            'description' => 'Все делается кусками, без общей цели',
            'image' => 'none',
            'bg_filled' => false
        )
    );

    ob_start();
    ?>
    <section class="problems-section screen-2">
        <div class="container">
            <h2 class="problems-title"><?php echo esc_html($atts['title']); ?></h2>
            <div class="problems-grid">
                <?php 
                // Разные изображения для каждой карточки
                $person_images = array(
                    1 => 'person-1.png',  // Карточка 1: Сайт не приносит клиентов
                    3 => 'person-2.png',  // Карточка 3: SEO без результатов
                    5 => 'person-3.png'   // Карточка 5: Сомнения и недоверие
                );
                
                $index = 0;
                foreach ($problems as $problem) : 
                    $index++;
                    // Определяем URL изображения для текущей карточки
                    if ($problem['image'] !== 'none' && isset($person_images[$index])) {
                        $image_url = get_template_directory_uri() . '/assets/images/' . $person_images[$index];
                    }
                ?>
                    <div class="problem-card problem-card-<?php echo $index; ?> <?php echo $problem['bg_filled'] ? 'bg-filled' : ''; ?> <?php echo $problem['image'] !== 'none' ? 'has-image' : ''; ?>">
                        <?php if ($problem['image'] !== 'none' && isset($person_images[$index])) : ?>
                            <div class="problem-image problem-image-<?php echo $problem['image']; ?>">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($problem['title']); ?>" class="problem-illustration">
                            </div>
                        <?php endif; ?>
                        <h3 class="problem-title"><?php echo esc_html($problem['title']); ?></h3>
                        <p class="problem-description"><?php echo esc_html($problem['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="solution-block">
                <?php 
                $subtract_url = get_template_directory_uri() . '/assets/images/subtract.svg';
                $forward_url = get_template_directory_uri() . '/assets/images/forward-button.svg';
                // Отдельное изображение для блока решения
                $solution_person_url = get_template_directory_uri() . '/assets/images/person-4.png';
                ?>
                <div class="solution-background">
                    <img src="<?php echo esc_url($subtract_url); ?>" alt="" class="solution-bg-image">
                </div>
                <div class="solution-text"><?php echo esc_html($atts['solution_text']); ?></div>
                <div class="solution-image-wrapper">
                    <img src="<?php echo esc_url($forward_url); ?>" alt="" class="solution-arrow">
                    <div class="solution-person">
                        <img src="<?php echo esc_url($solution_person_url); ?>" alt="" class="solution-person-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('simple_up_problems', 'simple_up_problems_shortcode');

// Шорткод для ЭКРАН 3: Наши решения
function simple_up_solutions_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Наши решения, которые реально работают'
    ), $atts);

    $solutions = array(
        array(
            'title' => 'Комплексное продвижение',
            'description' => 'Мы делаем глубокий анализ и системное SEO-продвижение, чтобы твой бизнес стабильно рос в поиске. Технично, системно, с реальными результатами. SEO, реклама и контент работают вместе, а не по отдельности.',
            'bg_white' => false
        ),
        array(
            'title' => 'ИТ-интеграции',
            'description' => 'Внедряем IT-решения под задачи: автоматизация, интеграции, CRM. Мы не делаем вид, а реально упрощаем процессы и ускоряем бизнес и он начинает работать как единое целое',
            'bg_white' => true
        ),
        array(
            'title' => 'Современные сайты',
            'description' => 'Разрабатываем сайты под бизнес-цели: дизайн, удобство, скорость работы. Всё так, чтобы сайт приносил клиентов, а не просто существовал',
            'bg_white' => true
        ),
        array(
            'title' => 'Управляемая реклама',
            'description' => 'Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.',
            'bg_white' => false
        )
    );

    ob_start();
    ?>
    <section class="solutions-section screen-3">
        <div class="container">
            <h2 class="solutions-title"><?php echo esc_html($atts['title']); ?></h2>
            <div class="solutions-grid">
                <?php foreach ($solutions as $index => $solution) : ?>
                    <div class="solution-card <?php echo $solution['bg_white'] ? 'bg-white' : 'bg-transparent'; ?>">
                    <div class="solution-card-header">
                        <h3 class="solution-card-title"><?php echo esc_html($solution['title']); ?></h3>
                        <?php $plus_icon_url = get_template_directory_uri() . '/assets/images/plus-icon.svg'; ?>
                        <div class="solution-card-icon">
                            <img src="<?php echo esc_url($plus_icon_url); ?>" alt="+" class="plus-icon">
                        </div>
                    </div>
                        <p class="solution-card-description"><?php echo esc_html($solution['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('simple_up_solutions', 'simple_up_solutions_shortcode');

// Регистрация меню
function simple_up_register_menus() {
    register_nav_menus(array(
        'primary' => 'Основное меню'
    ));
}
add_action('after_setup_theme', 'simple_up_register_menus');
