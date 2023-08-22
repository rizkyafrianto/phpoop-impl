<?php

require_once '../View/ViewRemoveTodoList.php';
require_once '../Model/TodoList.php';
require_once '../BussinessLogic/AddTodoList.php';
require_once '../BussinessLogic/ShowTodoList.php';

addTodoList("murni");
addTodoList("marni");
addTodoList("miran");

showTodoList();

viewRemoveTodoList();

showTodoList();
