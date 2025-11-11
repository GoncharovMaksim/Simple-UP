@echo off
echo ====================================
echo  Диагностика Docker проекта
echo ====================================
echo.

echo [1] Проверка Docker...
docker --version >nul 2>&1
if errorlevel 1 (
    echo [X] Docker не установлен или не запущен!
    echo     Установите Docker Desktop и запустите его.
    pause
    exit /b 1
)
echo [OK] Docker установлен
echo.

echo [2] Проверка контейнеров...
docker-compose ps
echo.

echo [3] Проверка портов...
netstat -an | findstr ":8080" >nul 2>&1
if errorlevel 1 (
    echo [X] Порт 8080 не прослушивается
) else (
    echo [OK] Порт 8080 активен
)
echo.

echo [4] Проверка доступности WordPress...
curl -I http://localhost:8080 2>nul | findstr "HTTP" >nul 2>&1
if errorlevel 1 (
    echo [X] WordPress не отвечает на запросы
    echo.
    echo [5] Просмотр логов WordPress...
    echo.
    docker-compose logs wordpress --tail=20
) else (
    echo [OK] WordPress отвечает на запросы
    echo.
    echo [INFO] Попробуйте открыть в браузере:
    echo        http://localhost:8080
    echo        http://127.0.0.1:8080
)
echo.

echo [6] Проверка подключения к базе данных...
docker-compose exec -T db mysql -u wordpress -pwordpress -e "SELECT 1;" wordpress >nul 2>&1
if errorlevel 1 (
    echo [X] Не удалось подключиться к базе данных
) else (
    echo [OK] База данных доступна
)
echo.

echo ====================================
echo  Решения проблем:
echo ====================================
echo.
echo 1. Если порт 8080 занят:
echo    - Измените порт в docker-compose.yml
echo    - Или остановите программу, использующую порт 8080
echo.
echo 2. Если WordPress не отвечает:
echo    - Подождите 30-60 секунд после запуска
echo    - Перезапустите: docker-compose restart
echo.
echo 3. Если браузер не открывает сайт:
echo    - Попробуйте http://127.0.0.1:8080
echo    - Очистите кеш браузера (Ctrl+Shift+Delete)
echo    - Попробуйте другой браузер
echo    - Проверьте настройки Firewall
echo.
echo 4. Полный перезапуск:
echo    docker-compose down
echo    docker-compose up -d
echo.
pause

