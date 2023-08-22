<?php

require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../BussinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Helper/input.php';

function viewShowTodoList()
{
   while (true) {
      showTodoList();

      echo "MENU" . PHP_EOL;
      echo "1. Tambah" . PHP_EOL;
      echo "2. Hapus" . PHP_EOL;
      echo "x. Keluar" . PHP_EOL;

      $pilihan = input("Pilih");

      if ($pilihan == "1") {
         viewAddTodoList();
      } else if ($pilihan == "2") {
         viewRemoveTodoList();
      } else if ($pilihan == "x") {
         break;
      } else {
         echo "Pilihan Tidak Tersedia" . PHP_EOL;
      }
   }

   echo "Sampai jumpa lagi";
}
