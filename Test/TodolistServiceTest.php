<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../Config/Database.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use Entitiy\Todolist;

function testShowTodolist(): void
{
   $conn = \Config\Database::getConnection();

   $todolistRepository = new TodolistRepositoryImpl($conn);
   $todolistService = new TodolistServiceImpl($todolistRepository);
   // $todolistService->addTodolist("Belajar PHP");
   // $todolistService->addTodolist("Belajar PHP OOP");
   // $todolistService->addTodolist("Belajar PHP Database");

   $todolistService->showTodolist();
}

function testAddTodolist(): void
{
   $conn = \Config\Database::getConnection();

   $todolistRepository = new TodolistRepositoryImpl($conn);

   $todolistService = new TodolistServiceImpl($todolistRepository);
   $todolistService->addTodolist("Belajar PHP");
   $todolistService->addTodolist("Belajar PHP OOP");
   $todolistService->addTodolist("Belajar PHP Database");


   // $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
   $conn = \Config\Database::getConnection();

   $todolistRepository = new TodolistRepositoryImpl($conn);

   $todolistService = new TodolistServiceImpl($todolistRepository);

   echo $todolistService->removeTodolist(5) . PHP_EOL;
   echo $todolistService->removeTodolist(4) . PHP_EOL;
   echo $todolistService->removeTodolist(3) . PHP_EOL;
   echo $todolistService->removeTodolist(2) . PHP_EOL;
   echo $todolistService->removeTodolist(1) . PHP_EOL;
}

testShowTodolist();
