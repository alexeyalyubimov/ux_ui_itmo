#Формальная постановка задачи

##Цель

Разработать и запустить веб-сайт "Электронный журнал учителя дефектолога", на котором педагог может ввести данные своего ученика и вести по нему всю документацию в чсоответствии с требованиями коррекционного курса "Пространственная ориентировка и мобильность".

##Основные требования

###Главная страница

* меню пользователя с переходом в личный кабинет;
* главное меню веб-сайта;
* основная область, на которой представлена основная информация;
* подвал веб-сайта с копирайтом.

###Главное меню

Главное меню является сквозным объектом интерфейса.
Главное меню содержит ссылки на документацию педагога, на три ступени основного образования. Все ссылки главного меню разделены и убраны в выпадающие списки.

###Базовые страницы

Все страницы, за исключением главной, являются базовыми. Их структура одинаковая.
Отличие одной базовой страницы от другой заключается в выводе контента в основной области.
Для страниц 9, 10 и 11 класс - это таблица с учащимися в соответствующем классе.
Для личного кабинета, отчётов, нагрузки - это информация соответствующая названию страницы.
Добавление учащегося - это форма для добавления данных по учащемуся в базу данных.

###Дополнительные требования

* использование виртуального хостинга на apach для развёртывания и функционирования сайта;
* страницы разрабатываются на html или php;
* Использование MYSQL в качестве базы данных;
* данные передаются и хронятся в bd mysql;
* взаимодействие с bd осуществляется с использованием php-запросов;
* реализация a11y для работы с сайтом при помощи программ экранного доступа;
* функциональность добавления учащегося посредством html-формы с передачей данных в bd;
* функциональность вывода списка учащихся по классу обучения из bd;
* использование css для стилей и позицианирования элементов интерфейса.

