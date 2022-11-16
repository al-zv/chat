### [Демонстрация проекта "Чат"](#1)
### [Описание проекта](#2)
### [Инструкция по запуску проекта](#3)

### <a name="1">Демонстрация проекта "Чат"</a>

<img width="1280" alt="image" src="https://user-images.githubusercontent.com/63869857/202247192-3dad31ed-4187-4655-b25f-15660faca2bb.png">

### <a name="2">Описание проекта</a>

Данный проект представляет собой чат и основан на фреймворке Laravel и стартовом комплекте Laravel Breeze.

В данном проекте реализовано:

- функционал аутентификации Laravel, включая вход в систему, регистрацию, сброс пароля, подтверждение адреса электронной почты и пароля;
- отправка сообщений в чат;
- редактирование и удаление сообщений авторами данных сообщений.

Слой «View» комплекта Laravel Breeze по умолчанию состоит из простых шаблонов Blade, стилизованных с помощью Tailwind CSS.

### <a name="3">Инструкция по запуску проекта</a> 

Скачать с GitHub

    git clone https://github.com/al-zv/chat.git
    
Запустить проект (php должен быть установлен)

    php artisan serve

Настроить подключение к базе данных (настройки подключения к базе данных находяться в файле .env)

Выполнить миграции

    php artisan migrate

