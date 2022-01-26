<?php
include_once(__DIR__ . '/../controllers/editTodo.php');
function showEdit()
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Todo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="gradient-text">Todo's</h1>
    <form class="form-section" method="post">
        <ul>
            <?php makeEditView(); //fetching todo to edit 
                ?>
            <button class="btn" type="button" onclick="location.href='index.php'">Create more todos</button>
            <button class="btn" type="button" onclick="location.href='todolist.php'">Todo-List</button>
        </ul>
    </form>
</body>

</html>
<?php
}
?>



