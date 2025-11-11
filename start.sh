#!/bin/bash

echo "===================================="
echo " Simple UP - Запуск через Docker"
echo "===================================="
echo ""

echo "Проверка Docker..."
if ! command -v docker &> /dev/null; then
    echo "ОШИБКА: Docker не установлен!"
    echo "Пожалуйста, установите Docker Desktop и запустите его."
    exit 1
fi

if ! docker info &> /dev/null; then
    echo "ОШИБКА: Docker не запущен!"
    echo "Пожалуйста, запустите Docker Desktop."
    exit 1
fi

echo "Docker найден!"
echo ""

echo "Запуск проекта..."
docker-compose up -d

if [ $? -ne 0 ]; then
    echo ""
    echo "ОШИБКА: Не удалось запустить контейнеры!"
    echo "Проверьте, что порты 8080 и 8081 свободны."
    exit 1
fi

echo ""
echo "===================================="
echo " Проект успешно запущен!"
echo "===================================="
echo ""
echo "WordPress: http://localhost:8080"
echo "Админ-панель: http://localhost:8080/wp-admin"
echo "phpMyAdmin: http://localhost:8081"
echo ""
echo "Для остановки используйте: docker-compose down"
echo ""

