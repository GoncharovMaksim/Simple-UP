# Simple UP - WordPress Theme

WordPress тема с версткой по макету Figma. Проект включает 3 основных экрана с интеграцией через шорткоды.

## Структура проекта

```
.
├── index.html              # HTML верстка для предпросмотра
├── css/
│   └── style.css          # Стили для верстки
├── images/                # Изображения
├── wordpress-theme/       # WordPress тема
│   ├── style.css          # Заголовок темы
│   ├── functions.php      # Функции темы
│   ├── index.php          # Основной шаблон
│   ├── header.php         # Шапка сайта
│   ├── footer.php         # Подвал сайта
│   ├── inc/
│   │   └── shortcodes.php # Шорткоды WordPress
│   └── assets/
│       ├── css/
│       │   └── style.css  # Стили темы
│       └── images/        # Изображения темы
├── docker-compose.yml     # Docker конфигурация
└── README.md
```

## Быстрый старт

### Запуск с Docker

1. Убедитесь, что Docker Desktop запущен

2. Запустите проект:

   **Windows:**

   ```bash
   start.bat
   ```

   **Linux/Mac:**

   ```bash
   ./start.sh
   ```

   Или через команду:

   ```bash
   docker-compose up -d
   ```

3. Подождите 1-2 минуты для инициализации WordPress

4. Откройте WordPress:

   - Сайт: http://localhost:8080
   - Админ-панель: http://localhost:8080/wp-admin
   - phpMyAdmin: http://localhost:8081

5. Завершите установку WordPress (выберите язык, создайте учетную запись)

6. Активируйте тему:
   - Перейдите в `Внешний вид → Темы`
   - Активируйте "Simple UP Theme"

### Управление Docker

**Windows:**

- Запустить: `start.bat`
- Остановить: `stop.bat`
- Перезапустить: `restart.bat`

**Linux/Mac:**

- Запустить: `./start.sh`
- Остановить: `./stop.sh`
- Перезапустить: `./restart.sh`

**Через команды:**

```bash
# Запустить
docker-compose up -d

# Остановить
docker-compose down

# Перезапустить
docker-compose restart

# Посмотреть логи
docker-compose logs -f

# Посмотреть статус
docker-compose ps
```

## Использование шорткодов

### Hero Section (Экран 1)

```
[simple_up_hero]
```

### Проблемы бизнеса (Экран 2)

```
[simple_up_problems]
```

### Наши решения (Экран 3)

```
[simple_up_solutions]
```

### Полный пример страницы:

```
[simple_up_hero]

[simple_up_problems]

[simple_up_solutions]
```

## Использование в WordPress

### В редакторе страниц/постов:

1. Перейдите в редактор страницы или поста
2. Добавьте блок "Шорткод"
3. Вставьте один из шорткодов

### В шаблоне темы:

```php
<?php echo do_shortcode('[simple_up_hero]'); ?>
```

## Структура экранов

### Экран 1: Hero Section

- Навигационное меню
- Контактная информация
- Социальные иконки
- Заголовок и описание
- Кнопка призыва к действию
- Статистические карточки

### Экран 2: Проблемы бизнеса

- Заголовок секции
- Сетка из 6 карточек проблем
- Блок решения с иллюстрацией

### Экран 3: Наши решения

- Заголовок секции
- Сетка из 4 карточек решений

## Стили

Все стили находятся в `wordpress-theme/assets/css/style.css` и автоматически подключаются через `functions.php`.

## Технологии

- HTML5
- CSS3 (Grid, Flexbox)
- PHP
- WordPress
- Docker

## Лицензия

Этот проект создан в образовательных целях.
