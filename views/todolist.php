<?php
function showTodos() {
    include(__DIR__ . '/../models/getTodos.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="gradient-text">Todo's</h1>
    <main class="main-section">
        <section class="list">
      
        <ul>
            <button class="btn-list1" type="button" onclick="location.href='index.php'">Create more todos</button>
            <?php createTodoList(); // Calls the function that invoke the todolist
            ?>
            
        
        </ul>
        </section>



    </main>
    
</body>
</html>



<?php
}