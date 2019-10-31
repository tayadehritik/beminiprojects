<html>
    <head>
        <title>
            Submitted data.
        </title>
    </head>
    <body>
        <?php function abc($salary,$job_title,$company_name,$job_type) {?>
            Form post method :- <?php echo $_SERVER['REQUEST_METHOD']?><br>
            Salary :- <?php foreach((array)$salary as $temp){echo "$".$temp.",";}?><br>
            Job Title :- <?php echo $job_title?><br>
            Company :- <?php echo $company_name?><br>
            Job Type :- <?php echo $job_type?><br>
        <?php return 0;} ?>
    </body>    
</html>
