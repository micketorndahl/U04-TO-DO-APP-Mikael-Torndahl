<?php
function makeEditView()
{
    require_once(__DIR__ . '/../config/db.php');
    include(__DIR__ . '/../models/editTodo.php');
    // Info about todo
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $pdo = connect();
        $sql = $pdo->prepare("SELECT todoTitle, todoDescription FROM todos WHERE id = '$id'");
        $sql->execute();
        $result = $sql->fetchAll();
        foreach ($result as $row) {
            $title = $row['todoTitle'];
            $description = $row['todoDescription'];
        }
        echo "
            <main class='main-section'>
    
        
        <h4>Edit Todo: $title</h4>
        <form class='form-section' action='todo-edited.php?id=$id' method='POST'>
            <li>
                <input class='' type='text' name='title'
                 value='$title' required>
            </li>
            <li>
                <textarea class='' type='text' name='description' required>$description</textarea>
            </li>
            <li>
                <label for='completed'>Status: </label>
                    <select name='completed' id='completed'>
                        <option value=0>Not Completed</option>
                        <option value=1>Completed</option>
                    </select>
                <button class='btn' type='submit' name='submit' value='Edit Todo'>Edit</button>
            </li>
        </form>
        </main>
        ";

    } else {
        echo "<h1>No todos to edit here</h1>";
    }
    if (isset($_POST['submit'])) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $completed = $_POST['completed'];
        //Sends the new info to the edit function
        editTodo($id, $title, $description, $completed);
        header('Location: ../todolist.php');
    }

}