<?php 
    function validate($job_title,$company_name,$location,$job_description,$salary,$job_type)
    {
        if(empty($job_title)||strlen($job_title)<3||empty($company_name)||strlen($company_name)<3||empty($location)||strlen($location)<3||empty($job_description)||strlen($job_description)<3||empty($salary)||empty($job_type))
        {
            return 1;
        }
        else if(!preg_match("/^[a-zA-Z]+$/i",$job_title))
        {
            return 2;
        }
        else
        {
            return 0;
        }
    }
?>