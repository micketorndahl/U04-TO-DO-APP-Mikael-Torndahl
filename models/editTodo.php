<?php
require_once(__DIR__ . '/../config/db.php');
// Updates todo info in database
function editTodo($id, $title, $description, $completed)
{
    $pdo = connect();
    $sql = "UPDATE todos SET todoTitle = '$title', todoDescription = '$description', completed = '$completed' WHERE id = '$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $description, $completed]);
}