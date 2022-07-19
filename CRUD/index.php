<?php

try {
    require('./db.php');

    $sql = "SELECT * FROM tasks";

    $result = $connection->prepare($sql);

    $result->execute();

    $tasks = $result->fetchAll();
} catch (\Exception $exception) {
    echo 'Error Exception: ' . $exception->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crear tarea:</h1>
    <form action="create.php">
        <input type="submit" value="Enviar">
    </form>
    <h1>Listado de Tareas</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <button><a href="./editTaskForm.php?idtasks=<?php echo $task['idtasks']; ?>">Edit task</a></button>
                <button><a href="./deleteTask.php?idtasks=<?php echo $task['idtasks']; ?>">Delete task</a></button>
                <?php echo $task['idtasks']; ?> - <?php echo $task['title']; ?>
            </li>
        <? endforeach; ?>
    </ul>
</body>

</html>