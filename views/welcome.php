<?php
function newTodo()
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-App</title>
    <link rel="stylesheet" href="/css/style.css">
    
</head>

<body>
    <h1 class="gradient-text">Todo's</h1>
    <!-- User redirected to create-todo.php when adding new todo. -->
    <main class="main-section">
    <form class="form-section" action="new-todo.php" method="POST">
        <h4>Add a new Todo here!</h4>
        <ul>
            <li>
                <input class="" type="text" maxlength="50" name="todoTitle"
                    placeholder="Add a title.." required>
            </li>
            <li>
                <textarea class="" type="text" maxlength="255" name="todoDescription"
                    placeholder="Add a description.." required></textarea>
            </li>
            <button class="btn" type="submit">Add Todo</button>
            <button class="btn2" type="button" onclick="location.href='todolist.php'">Todo-List</button>
        </ul>
    </form>
    </main>
</body>

</html>

<?php
}
?>