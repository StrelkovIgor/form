@extends('html')
@section('content')

<h2>Тестовое задание</h2>

<p>С помощью фреймоворка Laravel (любой версии, лучше посденей) <a href="https://laravel.com/">https://laravel.com/</a> реализовать следующий функционал:</p>

<p>Создать сайт со страницей на которой будет форма для приема заявки.

<p>Заявка состоит из email’а и текста (необязательное поле, максимум 5000 символов)
Все заявки необходимо сохранять в базу данных, вместе с датой создания этой заявки и номером заявки (должен генерироваться автоматически).</p>

<p>В случае, если пользователь оставляет более одной заявки, то все предыдущие его заявки должны удаляться.</p>

<p>Также у пользователя должна быть возможность видеть  что он уже оставил заявку и ее номер.</p>

<p>Авторизация и регистрация пользователей не требуется. Предполагается что у пользователя самый современный браузер и исправно работаю cookies.</p>

<p>Выбор базы данных и необходимых компонентов на ваше усмотрение. 
Код и инструкцию по развертыванию необходимо залить в публичный репозиторий на Github или Bitbucked и выслать ссылку на it@batnorton.com с темой письма “Тестовое задание (Ваше имя)”</p>
@stop