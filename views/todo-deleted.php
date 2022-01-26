<?php

function showDeleted() {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Todo</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1 class="gradient-text">Todo's</h1>
            <main class="main-section">
    <form class="form-section" action="todolist.php" method="POST">
        <h4>Todo is deleted!</h4>
        <ul>
            <button class="btn" type="submit">Todo-List</button>
            <button class="btn" type="button" onclick="location.href='index.php'">Create more todos</button>
        </ul>
    </form>
        
    </body>
    </html>
<?php    
}