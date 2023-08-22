<?php

require_once __DIR__ . '/../Helper/input.php';
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinessLogic/AddTodoList.php';

function viewAddTodoList()
{
   echo "MENAMBAH TODOLIST" . PHP_EOL;

   $todo = input("Todo (x untuk batal)");

   if ($todo == "x") {
      echo "Batal Menambah Todo";
   } else {
      addTodoList($todo);
   }
}
