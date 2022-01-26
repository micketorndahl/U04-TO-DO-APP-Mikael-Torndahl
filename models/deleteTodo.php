<?php
include(__DIR__ . '/../config/db.php');

function deleteTodo($id){
    $pdo = connect();
    $sql = "DELETE FROM todos where id = $id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));
}