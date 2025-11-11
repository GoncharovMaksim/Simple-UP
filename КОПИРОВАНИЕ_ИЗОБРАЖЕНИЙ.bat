@echo off
echo ============================================
echo Копирование изображений из Figma
echo ============================================
echo.
echo Пожалуйста, укажите путь к папке с изображениями
echo Например: C:\Users\ВашеИмя\Downloads
echo.
set /p SOURCE_PATH="Введите путь к папке с изображениями: "

if not exist "%SOURCE_PATH%" (
    echo Ошибка: Папка не найдена!
    pause
    exit /b 1
)

echo.
echo Копирование файлов...
echo.

REM Копирование в images
if exist "%SOURCE_PATH%\person-1.png" (
    copy /Y "%SOURCE_PATH%\person-1.png" "images\person-1.png"
    echo [OK] person-1.png скопирован в images
) else (
    echo [ОШИБКА] person-1.png не найден в %SOURCE_PATH%
)

if exist "%SOURCE_PATH%\person-2.png" (
    copy /Y "%SOURCE_PATH%\person-2.png" "images\person-2.png"
    echo [OK] person-2.png скопирован в images
) else (
    echo [ОШИБКА] person-2.png не найден в %SOURCE_PATH%
)

if exist "%SOURCE_PATH%\person-3.png" (
    copy /Y "%SOURCE_PATH%\person-3.png" "images\person-3.png"
    echo [OK] person-3.png скопирован в images
) else (
    echo [ОШИБКА] person-3.png не найден в %SOURCE_PATH%
)

if exist "%SOURCE_PATH%\person-4.png" (
    copy /Y "%SOURCE_PATH%\person-4.png" "images\person-4.png"
    echo [OK] person-4.png скопирован в images
) else (
    echo [ОШИБКА] person-4.png не найден в %SOURCE_PATH%
)

echo.
echo Копирование в wordpress-theme/assets/images...
echo.

REM Копирование в wordpress-theme/assets/images
if exist "%SOURCE_PATH%\person-1.png" (
    copy /Y "%SOURCE_PATH%\person-1.png" "wordpress-theme\assets\images\person-1.png"
    echo [OK] person-1.png скопирован в wordpress-theme/assets/images
)

if exist "%SOURCE_PATH%\person-2.png" (
    copy /Y "%SOURCE_PATH%\person-2.png" "wordpress-theme\assets\images\person-2.png"
    echo [OK] person-2.png скопирован в wordpress-theme/assets/images
)

if exist "%SOURCE_PATH%\person-3.png" (
    copy /Y "%SOURCE_PATH%\person-3.png" "wordpress-theme\assets\images\person-3.png"
    echo [OK] person-3.png скопирован в wordpress-theme/assets/images
)

if exist "%SOURCE_PATH%\person-4.png" (
    copy /Y "%SOURCE_PATH%\person-4.png" "wordpress-theme\assets\images\person-4.png"
    echo [OK] person-4.png скопирован в wordpress-theme/assets/images
)

echo.
echo ============================================
echo Готово!
echo ============================================
echo.
echo Проверка файлов:
powershell -Command "Get-FileHash images\person-*.png | Format-Table Algorithm, @{Label='File';Expression={Split-Path $_.Path -Leaf}}, Hash -AutoSize"
echo.
pause

