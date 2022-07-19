<?php 

try {

    $title = $_POST['title'];

    $idTask = $_POST['idtasks'];

    require('./db.php');

    $sql = "UPDATE tasks SET title =  '$title' WHERE idtasks = '$idTask'";

    $connection->exec($sql);

    header("Location: ./index.php");       
} catch (\Exception $exception) {
    echo 'Error Exception: ' .$exception->getMessage();
}

?>