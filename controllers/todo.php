<?php
include(__DIR__ . '/../models/todo.php');
include(__DIR__ . '/../views/todo-created.php');

function handleCreateTodo()
{
    $todo_title = $_POST['todoTitle'];
    $todo_description = $_POST['todoDescription'];

    newTodo($todo_title, $todo_description); // creating todo in function 
    
    showTodoCreated(); // showing user that todo is created
}

