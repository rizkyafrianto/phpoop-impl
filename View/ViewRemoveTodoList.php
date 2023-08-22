<?php

require_once __DIR__ . '/../Helper/input.php';
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinessLogic/RemoveTodoList.php';

function viewRemoveTodoList()
{
   echo "MENGHAPUS TODOLIST" . PHP_EOL;

   $pilihan = input("Nomor (x untuk batalkan)");

   if ($pilihan == "x") {
      echo "Gagal Menghapus Todo";
   } else {

      $success = removeTodoList($pilihan);

      if ($success) {
         echo "Sukses Menghapus Todo Nomor $pilihan" . PHP_EOL;
      } else {
         echo "Gagal Menghapus Nomor $pilihan" . PHP_EOL;
      }
   }
}
