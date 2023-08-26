<?php

namespace View;

use Service\TodolistService;
use Helper\inputHelper;

class TodolistView
{

   private TodolistService $todolistService;

   public function __construct(TodolistService $todolistService)
   {
      $this->todolistService = $todolistService;
   }


   function showTodolistView(): void
   {
      while (true) {
         $this->todolistService->showTodoList();

         echo "MENU" . PHP_EOL;
         echo "1. Tambah" . PHP_EOL;
         echo "2. Hapus" . PHP_EOL;
         echo "x. Keluar" . PHP_EOL;

         $pilihan = inputHelper::input("Pilih");

         if ($pilihan == "1") {
            $this->addTodolistView();
         } else if ($pilihan == "2") {
            $this->removeTodolistView();
         } else if ($pilihan == "x") {
            break;
         } else {
            echo "Pilihan Tidak Tersedia" . PHP_EOL;
         }
      }

      echo "Sampai jumpa lagi";
   }

   function addTodolistView(): void
   {
      echo "MENAMBAH TODOLIST" . PHP_EOL;

      $todo = inputHelper::input("Todo (x untuk batal)");

      if ($todo == "x") {
         echo "Batal Menambah Todo" . PHP_EOL;
      } else {
         $this->todolistService->addTodolist($todo);
      }
   }

   function removeTodolistView(): void
   {
      echo "MENGHAPUS TODOLIST" . PHP_EOL;

      $pilihan = inputHelper::input("Nomor (x untuk batalkan)");

      if ($pilihan == "x") {
         echo "Batal Menghapus Todo" . PHP_EOL;
      } else {
         $this->todolistService->removeTodolist($pilihan);
      }
   }
}
