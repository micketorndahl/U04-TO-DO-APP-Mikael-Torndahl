<?php
include(__DIR__ . '/../models/deleteTodo.php');
include(__DIR__ . '/../views/todo-deleted.php');
function handleDeleteTodo() {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        deleteTodo($id);
    }
    showDeleted();
}
