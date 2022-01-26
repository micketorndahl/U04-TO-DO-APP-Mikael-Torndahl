<?php
include(__DIR__ . '/../config/db.php');


function createTodoList()
{
    $pdo = connect();
    $sql = $pdo->prepare("SELECT * FROM todos ORDER BY id DESC");
    $sql->execute();
    $result = $sql->fetchAll();
    //fetching all todos in database order by id
    foreach ($result as $row) {
        $id = $row['id'];
        $title = $row['todoTitle'];
        $description = $row['todoDescription'];
        $created = $row['created'];
        $completed = $row['completed'];

        if ($completed == 0) {
            $status = "is not completed";
        } else {
            $status = "is completed";
        }
?>
<li>
    <!-- Printing out all todos in a list -->
    <i></i>
    <h2 class="listContent1"><?php echo $title . " " . $status ?></h2>
    <p class="listContent2"> <?php echo nl2br("$description \n Created: $created "); ?><button class="btn-list" type="button"><a
                href="todo-completed.php?id=<?php echo $id ?>">
                <span class="text">Complete</span></a></button><button class="btn-list" type="button"><a
                href="edit-todo.php?id=<?php echo $id ?>"><span class="text">Edit</span></a></button><button class="btn-list" type="button"><a
                href="/delete-todo.php?id=<?php echo $id ?>"><span class="text">Delete</span></a></button></p>
</li>
<?php
    }
}