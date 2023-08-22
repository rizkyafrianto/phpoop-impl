<?php

require_once '../View/ViewAddTodoList.php';
require_once '../BussinessLogic/ShowTodoList.php';
require_once '../BussinessLogic/AddTodoList.php';
require_once '../Helper/input.php';

addTodoList("murni");
addTodoList("marni");
addTodoList("miran");

viewAddTodoList();

showTodoList();
