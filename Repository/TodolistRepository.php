<?php

namespace Repository;

use Entitiy\Todolist;
use PDO;

interface TodolistRepository
{

   function save(Todolist $todolist): void;

   function remove(int $number): bool;

   function findAll(): array;
}

class TodolistRepositoryImpl implements TodolistRepository
{

   public array $todolist = array();

   private PDO $conn;

   public function __construct(PDO $conn)
   {
      $this->conn = $conn;
   }

   function save(Todolist $todolist): void
   {
      // $number = sizeof($this->todolist) + 1;
      // $this->todolist[$number] = $todolist;

      $sql = "INSERT INTO todolist(todo) VALUES(?)";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$todolist->getTodo()]);
   }

   function remove(int $number): bool
   {
      // if ($number > sizeof($this->todolist)) {
      //    return false;
      // }

      // for ($i = $number; $i < sizeof($this->todolist); $i++) {
      //    $this->todolist[$i] = $this->todolist[$i + 1];
      // }

      // unset($this->todolist[sizeof($this->todolist)]);

      // return true;

      $sql = "SELECT id FROM todolist WHERE id=?";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([$number]);

      if ($stmt->fetch()) {
         $sql = "DELETE FROM todolist WHERE id=?";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute([$number]);

         return true;
      } else {
         return false;
      }
   }

   function findAll(): array
   {
      // return $this->todolist;

      $sql = "SELECT id, todo FROM todolist";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();

      $result = [];

      foreach ($stmt as $row) {
         $todolist = new Todolist();
         $todolist->setId($row['id']);
         $todolist->setTodo($row['todo']);

         $result[] = $todolist;
      }

      return $result;
   }
}
