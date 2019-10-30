<?php
session_start();
if ($_SESSION['sid'] == "") {
    header('Location:index.php');
}
$id = $_SESSION['sid'];
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
                <li><a href="yaboutus.php"><button>ABOUT US</button></a></li>
                <li><a href="yhome.php?chk=logout"><button>LOGOUT</button></a></li>
            </ul>
        </nav>
    </header>
    <div class="inbox">
        <ul>
            <li><a href="ycompose.php">COMPOSE</a></li>
            <li><a href="yhome.php">INBOX</li>
            <li><a href="ysent.php">SENT</a></li>
            <li><a href="ychngpswd.php">CHANGE PASSWORD</a></li>
            <li><a href="yprofed.php">PROFILE</a></li>
        </ul>
        <div class="inboxtable">
            <br><br><br>
            <form method="post">
                <table border="0">
                    <tr>
                        <td>Old Pass </td>
                        <td>
                            <input type="password" name="op" />
                        </td>
                    </tr>
                    <tr>
                        <td>New Password </td>
                        <td>
                            <input type="password" name="np" />
                        </td>
                    </tr>
                    <tr>
                        <td>Confirm Pass </td>
                        <td><input type="password" name="cp" /></td>
                    </tr>
                    <tr>
                        <th><button type="submit" name="chngP" value="Change Password" />Change Password</button></th>
                    </tr>

                </table>
            </form>
        </div>

        <?php
        include_once('connection.php');
        error_reporting(1);
        $id = $_SESSION['sid'];
        $op = $_POST['op'];
        $np = $_POST['np'];
        $cp = $_POST['cp'];
        if (isset($_POST['chngP'])) {
            if ($op == "" || $np == "" || $cp == "") {
                $err = "Fill all the fields first";
            } else {
                $sql = "select * from userinfo where user_name ='$id'";
                $d = mysqli_query($con, $sql);
                list($a, $b, $c) = mysqli_fetch_array($d);
                if ($c == $op) {
                    if ($np == $cp) {
                        $sql = "update userinfo set password='$np' where user_name='$id'";
                        $d = mysqli_query($con, $sql);
                        echo "pass updated...";
                    } else {
                        echo "new pass doesn't match to confirm pass";
                    }
                } else {
                    echo "wrong old password";
                }
            }
        }
        ?>
    </div>
</body>

</html>