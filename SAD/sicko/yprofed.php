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
        <br><br>
        <div class="inboxtable">
            <?php
            error_reporting(1);
            $sid = $_SESSION['sid'];
            include_once('connection.php');

            $r = mysqli_query($con, "select * from userinfo where user_name='$sid'");
            echo "<table border='1' align='center'>";
            $row = mysqli_fetch_object($r);
            $p = $row->password;
            $m = $row->mobile;
            $e = $row->email;

            echo "<tr height='40'>";
            echo "<td>Your username :</td>";
            echo "<td>" . $row->user_name . "</td>";
            echo "</tr>";

            echo "<tr height='40'>";
            echo "<td>Change Password :</td>";
            echo "<td><a href='ychngpswd.php'>CHANGE PASSWORD</a></td>";
            echo "</tr>";

            echo "<tr height='40'>";
            echo "<td>Your Mobile :</td>";
            echo "<td>" . $m . "</td>";
            echo "</tr>";

            echo "<tr height='40'>";
            echo "<td>Email </td>";
            echo "<td>" . $e . "</td>";
            echo "</tr>";

            echo "<tr height='40'>";
            echo "<td>Your gender is :</td>";
            echo "<td>" . $row->gender . "</td>";
            echo "</tr>";

            echo "<tr height='40'>";
            echo "<td>Your DOB is :</td>";
            echo "<td>" . $row->dob . "</td>";
            echo "</tr>";

            echo "</table>";
            ?>

        </div>
    </div>
</body>

</html>