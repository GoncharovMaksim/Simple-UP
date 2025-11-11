@echo off
echo ====================================
echo  Simple UP - Запуск через Docker
echo ====================================
echo.

echo Проверка Docker...
docker --version >nul 2>&1
if errorlevel 1 (
    echo ОШИБКА: Docker не установлен или не запущен!
    echo Пожалуйста, установите Docker Desktop и запустите его.
    pause
    exit /b 1
)

echo Docker найден!
echo.

echo Запуск проекта...
docker-compose up -d

if errorlevel 1 (
    echo.
    echo ОШИБКА: Не удалось запустить контейнеры!
    echo Проверьте, что порты 8080 и 8081 свободны.
    pause
    exit /b 1
)

echo.
echo ====================================
echo  Проект успешно запущен!
echo ====================================
echo.
echo Подождите 30-60 секунд для инициализации WordPress...
echo.
timeout /t 5 /nobreak >nul
echo.
echo WordPress: http://localhost:8080
echo Админ-панель: http://localhost:8080/wp-admin
echo phpMyAdmin: http://localhost:8081
echo.
echo ====================================
echo  Важно!
echo ====================================
echo.
echo Если сайт не открывается:
echo 1. Подождите еще 30-60 секунд
echo 2. Обновите страницу (F5 или Ctrl+F5)
echo 3. Попробуйте: http://127.0.0.1:8080
echo 4. Очистите кеш браузера (Ctrl+Shift+Delete)
echo 5. Запустите check-docker.bat для диагностики
echo.
echo Для остановки: docker-compose down
echo Для диагностики: check-docker.bat
echo.
pause

