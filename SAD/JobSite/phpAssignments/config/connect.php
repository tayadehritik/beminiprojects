<?php 
    try{
        $pdo = new PDO("pgsql:host=localhost;dbname=ygarudkar", "postgres", "yash");
    }
    catch(PDOException $e){
        echo $e->getMessage();
}
?>