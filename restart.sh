#!/bin/bash

echo "===================================="
echo " Simple UP - Перезапуск проекта"
echo "===================================="
echo ""

echo "Остановка контейнеров..."
docker-compose down

echo ""
echo "Запуск контейнеров..."
docker-compose up -d

if [ $? -ne 0 ]; then
    echo ""
    echo "ОШИБКА: Не удалось перезапустить контейнеры!"
    echo "Проверьте, что порты 8080 и 8081 свободны."
    exit 1
fi

echo ""
echo "===================================="
echo " Проект перезапущен!"
echo "===================================="
echo ""
echo "Подождите 30-60 секунд для инициализации WordPress..."
echo ""
echo "WordPress: http://localhost:8080"
echo "Админ-панель: http://localhost:8080/wp-admin"
echo "phpMyAdmin: http://localhost:8081"
echo ""

