<?php
   
    try {
        require('./db.php');
    
        $idTask = $_GET['idtasks'];
    
        $sql = "DELETE FROM tasks WHERE (idtasks=$idTask)";
    
        $result = $connection->prepare($sql);
    
        $result->execute();

        header("Location: ./index.php");
    
    } catch (\Exception $ex) {
        echo 'Error Exception: ' . $ex->getMessage();
    }
?>