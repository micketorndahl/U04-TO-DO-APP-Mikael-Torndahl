<?php
include(__DIR__ . '/../config/db.php');
// inserting todo in database
function newTodo($todo_title, $todo_description)
{
    $pdo = connect(); // get database connection from db connect
    $sql = "INSERT INTO todos (todoTitle, todoDescription) VALUES (:todoTitle, :todoDescription) ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['todoTitle' => $todo_title, 'todoDescription' => $todo_description]);
}