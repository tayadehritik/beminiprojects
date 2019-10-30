<?php session_start();
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SickoMail</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <h4>SickoMail</h4>
        <nav>
            <ul class="nav__links">
                <li><a href="yregister.php"><button>NEW USER?</button></a></li>
                <li><a href="yaboutus.php"><button>ABOUT US</button></a></li>
            </ul>
        </nav>
    </header>
    <div class="inbox">
    <h1>Welcome <?php session_start();
                    echo @$_SESSION['sname'];
                    ?>
        ! Your account has been created,
        to access your account click on Login Button Above</h1>
        <br><br>
        <h1>Happy SickoMailing!!!</h1>
</body>

</html>