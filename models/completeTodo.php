<?php
include(__DIR__ . '/../config/db.php');

//Updating value to 1 for completed

function completeTodo($id) {
    $completed = 1;
    $pdo = connect();
    $sql = "UPDATE todos SET completed = '$completed' WHERE id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$completed]);
}