<?php

/**
 * menampilan todo di list
 */

function showTodoList()
{
   global $todolist;

   echo "Todolist" . PHP_EOL;

   foreach ($todolist as $number => $value) {
      echo "$number. $value" . PHP_EOL;
   }
}
