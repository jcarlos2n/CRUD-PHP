<?php
try {
    require('./db.php');

    $idTask = $_GET['idtasks'];

    $sql = "SELECT * FROM tasks WHERE (idtasks=$idTask)";

    $result = $connection->prepare($sql);

    $result->execute();

    $task = $result->fetch();


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
    <form action="updateTask.php" method="post">
        <input type="hidden" name="idtasks" value="<?php echo $task['idtasks']; ?>" >
        <input type="text" name="title" value="<?php echo $task['title']; ?>">
        <input type="submit" value="Actualizar tareas" name="submit"> 
    </form>
</body>
</html>