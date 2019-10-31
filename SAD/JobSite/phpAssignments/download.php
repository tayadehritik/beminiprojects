<?php
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        require 'config/connect.php';
        $query = "SELECT * FROM jobs WHERE id=$id";
        foreach($pdo->query($query) as $result)
        {
            echo $result['salary'],$result['job_title'],"\n",$result['company'],"\n",$result['job_type'],"\n",$result['location'],"\n",$result['job_description'];
        }
    }
?>