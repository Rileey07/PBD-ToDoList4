<?php

use Entity\Todolist;
use Repository\TodolistRepository;

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/ToDoListRepository.php';
require_once __DIR__ . '/Service/Todolistview.php';
require_once __DIR__ . '/View/TodolistView.php';
require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Config/Database.php';

use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

echo "Aplikasi Todolist" . PHP_EOL;

$connection =\Config\Database::getConnection();
$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceImpl($TodolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();

?>