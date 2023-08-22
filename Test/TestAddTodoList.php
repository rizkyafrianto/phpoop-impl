<?php

require_once '../Model/TodoList.php';
require_once '../BussinessLogic/AddTodoList.php';

addTodoList("marni");
addTodoList("kurni");
addTodoList("murni");

var_dump($todolist);
