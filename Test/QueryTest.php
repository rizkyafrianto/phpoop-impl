<?php

require_once __DIR__ . '/../Config/Database.php';

$conn = \Config\Database::getConnection();

$sql = "SELECT * FROM todolist";

$stmt = $conn->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
   echo $row["id"] . ". ";
   echo $row["todo"] . PHP_EOL;
}
