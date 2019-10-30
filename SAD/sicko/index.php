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
    <div class="login">
        <h1>Login</h1>
        <form method="post" id="log">
            <font color="#FF0000"><?php echo @$err; ?></font>
            <p>Username</p>
            <input type="text" name="id" autofocus>
            <p>Password</p>
            <input type="password" name="pwd">
            <tr>
                <center><button type="submit" name="signIn">Sign In</button></center>
            </tr>


        </form>
    </div>


    <?php
    error_reporting(1);
    include_once('connection.php');
    if (isset($_POST['signIn'])) {
        if ($_POST['id'] == "" || $_POST['pwd'] == "") {
            $err = "fill your id and password first";
        } else {
            $d = mysqli_query($con, "SELECT * FROM userinfo where user_name='{$_POST['id']}'");
            $row = mysqli_fetch_object($d);
            $fid = $row->user_name;
            $fpass = $row->password;
            if ($fid == $_POST['id'] && $fpass == $_POST['pwd']) {
                $_SESSION['sid'] = $_POST['id'];
                echo "<script>window.location='yhome.php'</script>";
            } else {
                $err = "Invalid ID or Password!";
            }
        }
    }
    ?>

</body>

</html>