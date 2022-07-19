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
    <link rel="stylesheet" href="styles/styles.css">
    
</head>

<body> 
    <div class="cont">
    <h1>Crear tarea:</h1>
    <form action="create.php">
        <input type="submit" value="Enviar" class="boton">
    </form>
    <h1>Listado de Tareas</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php echo $task['idtasks']; ?> - <?php echo $task['title']; ?>
                <button class="boton"><a href="./editTaskForm.php?idtasks=<?php echo $task['idtasks']; ?>">Edit task</a></button>
                <button class="boton"><a href="./deleteTask.php?idtasks=<?php echo $task['idtasks']; ?>">Delete task</a></button>
            </li>
        <? endforeach; ?>
    </ul>
    </div>
    
</body>

</html>