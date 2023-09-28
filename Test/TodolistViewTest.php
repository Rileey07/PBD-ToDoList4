<?php

require_once _DIR_ . '/../Entity/Todolist.php';
require_once _DIR_ . '/../Repository/TodolistRepository.php';
require_once _DIR_ . '/../Service/TodolistView.php';
require_once _DIR_ . '/../View/TodolistView.php';
require_once _DIR_ . '/../Helper/InputHelper.php';

use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist(): void 
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl ($todolistRepository);
    $todolistView = new TodolistView ($todolistService);

    $todolistService->addTodolist ("Belajar Php");
    $todolistService->addTodolist ("Belajar Php OOP");
    $todolistService->addTodolist ("Belajar Php Database");

    $todolistService->showTodolist();

}

function testViewAddTodolist(): void 
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl ($todolistRepository);
    $todolistView = new TodolistView ($todolistService);

    $todolistService->addTodolist ("Belajar Php");
    $todolistService->addTodolist ("Belajar Php OOP");
    $todolistService->addTodolist ("Belajar Php Database");


    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService-> showTodolist();

    $todolistView->addTodolist ();

    $todolistService->showTodolist();

}

function tesViewRemoveTodolist(): void 
{

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView ($todolistService);

    $todolistService->addTodolist ("Belajar Php");
    $todolistService->addTodolist ("Belajar Php OOP");
    $todolistService->addTodolist ("Belajar Php Database");

    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService-> showTodolist();

    $todolistView->addTodolist ();

    $todolistService->showTodolist();

}

tesViewRemoveTodolist();