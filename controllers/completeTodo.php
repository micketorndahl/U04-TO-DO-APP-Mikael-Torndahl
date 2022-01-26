<?php
include(__DIR__ . '/../models/completeTodo.php');
include(__DIR__ . '/../views/todo-completed.php');
function handleCompleteTodo(){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        completeTodo($id); // Completes todo in database
    }
    showCompleted();
}
