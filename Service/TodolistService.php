<?php

namespace Service;

use Entitiy\Todolist;
use Repository\TodolistRepository;

interface TodolistService
{
   function showTodolist();

   function addTodolist(string $todo): void;

   function removeTodolist(int $number): void;
}

class TodolistServiceImpl implements TodolistService
{

   private TodolistRepository $todolistRepository;

   public function __construct(TodolistRepository $todolistRepository)
   {
      $this->todolistRepository = $todolistRepository;
   }

   function showTodolist()
   {
      echo "TODOLIST" . PHP_EOL;
      $todolist = $this->todolistRepository->findAll();
      foreach ($todolist as $number => $value) {
         echo $value->getId() . "." . $value->getTodo() . PHP_EOL;
      }
   }

   function addTodolist(string $todo): void
   {
      $todolist = new Todolist($todo);
      $this->todolistRepository->save($todolist);
      echo "Sukses menambah Todolist" . PHP_EOL;
   }

   function removeTodolist(int $number): void
   {
      if ($this->todolistRepository->remove($number)) {
         echo "sukses mengahapus todolist nomor" . PHP_EOL;
      } else {
         echo "gagal menghapus todolist" . PHP_EOL;
      }
   }
}
