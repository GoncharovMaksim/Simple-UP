@echo off
echo ====================================
echo  Simple UP - Перезапуск проекта
echo ====================================
echo.

echo Остановка контейнеров...
docker-compose down

echo.
echo Запуск контейнеров...
docker-compose up -d

if errorlevel 1 (
    echo.
    echo ОШИБКА: Не удалось перезапустить контейнеры!
    echo Проверьте, что порты 8080 и 8081 свободны.
    pause
    exit /b 1
)

echo.
echo ====================================
echo  Проект перезапущен!
echo ====================================
echo.
echo Подождите 30-60 секунд для инициализации WordPress...
echo.
echo WordPress: http://localhost:8080
echo Админ-панель: http://localhost:8080/wp-admin
echo phpMyAdmin: http://localhost:8081
echo.
pause

