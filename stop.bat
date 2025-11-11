@echo off
echo ====================================
echo  Simple UP - Остановка проекта
echo ====================================
echo.

echo Остановка контейнеров...
docker-compose down

if errorlevel 1 (
    echo.
    echo ОШИБКА: Не удалось остановить контейнеры!
    pause
    exit /b 1
)

echo.
echo ====================================
echo  Проект остановлен!
echo ====================================
echo.
echo Для запуска используйте: start.bat
echo Или команду: docker-compose up -d
echo.
pause

