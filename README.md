### [Демонстрация проекта "Чат"](#1)
### [Описание проекта](#2)
### [Инструкция по запуску проекта](#3)

### <a name="1">Демонстрация проекта "Чат"</a>

Вход в проект

<img width="1280" alt="image" src="https://user-images.githubusercontent.com/63869857/202270539-e83d4bf8-d2c4-4fd8-8f9d-2230c7ae0303.png">

Интерфейс проекта "Чат"

<img width="1280" alt="image" src="https://user-images.githubusercontent.com/63869857/202247192-3dad31ed-4187-4655-b25f-15660faca2bb.png">

### <a name="2">Описание проекта</a>

Данный проект представляет собой чат и основан на фреймворке Laravel и стартовом комплекте Laravel Breeze.

В данном проекте реализовано:

- функционал аутентификации Laravel, включая вход в систему, регистрацию, сброс пароля, подтверждение адреса электронной почты и пароля;
- отправка сообщений в чат;
- редактирование и удаление сообщений авторами данных сообщений;
- разраничение прав между пользователями.

Слой «View» комплекта Laravel Breeze по умолчанию состоит из простых шаблонов Blade, стилизованных с помощью Tailwind CSS.

### <a name="3">Инструкция по запуску проекта</a> 

Скачать с GitHub:

    git clone https://github.com/al-zv/chat.git
    
Настроить подключение к базе данных (настройки подключения к базе данных находятся в файле .env).    
    
Запустить проект (php должен быть установлен):

    php artisan serve

Запустить npm (npm должен быть установлен):

    npm run dev

Выполнить миграции:

    php artisan migrate

Перейти на страницу путь к которой будет отображен после команды:

    php artisan serve
