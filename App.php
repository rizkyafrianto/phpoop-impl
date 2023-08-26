<?php

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Helper/inputHelper.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/View/TodolistView.php';
require_once __DIR__ . '/Config/Database.php';


use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Aplikasi todolist" . PHP_EOL;

$conn = \Config\Database::getConnection();

$todolistRepository = new TodolistRepositoryImpl($conn);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolistView();
