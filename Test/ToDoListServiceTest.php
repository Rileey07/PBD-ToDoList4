<?php

require_once __DIR__ . "/../Repository/TodolistRepository.php" ;
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";
require_once __DIR__ . "/../Entity/Todolist.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodoList(): void
{
    $todoListRepository = new TodolistReositoryImpl();
    $todoListRepository->todoList[1] = new Todolist("Belajar PHP");
    $todoListRepository->todoList[2] = new Todolist("Belajar PHP OOP");
    $todoListRepository->todoList[3] = new Todolist("Belajar PHP Database");

    $todoListService = new TodolistServiceImpl($todolistRepository);

    $todoListService->ShowTodolist;
} 
function testAddTodolist(): void
{
    $cannection = \Config\Database::getConnection();
    $todoListRepository = new TodolistReositoryImpl($connection);

    $todoListRepository = new TodolistRepositoryImpl();
    $todoListRepository->todoList("Belajar PHP");
    $todoListRepository->todoList("Belajar PHP OOP");
    $todoListRepository->todoList("Belajar PHP Database");

   // $todoListService->ShowTodoList();
}
function testRemoveTodoList(): void
{
    $connection = \Config\Database::getConnection();
    $todoListRepository = new TodolistRepositoryImpl($connection);

    $todoListRepository = new TodolistReositoryImpl($todoListRepositoryImpl);

   echo $todoListService->removeTodoList(5) . PHP_EOL; 
   echo $todoListService->removeTodoList(4) . PHP_EOL; 
   echo $todoListService->removeTodoList(3) . PHP_EOL; 
   echo $todoListService->removeTodoList(2) . PHP_EOL; 
   echo $todoListService->removeTodoList(1) . PHP_EOL; 

}

testRemoveTodoList();