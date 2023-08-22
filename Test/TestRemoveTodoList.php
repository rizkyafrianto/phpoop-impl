<?php

require_once '../Model/TodoList.php';
require_once '../BussinessLogic/RemoveTodoList.php';
require_once '../BussinessLogic/AddTodoList.php';
require_once '../BussinessLogic/ShowTodolist.php';


addTodoList("murni");
addTodoList("marni");
addTodoList("miran");
addTodoList("meren");
addTodoList("maran");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(5);
var_dump($success);

showTodoList();
