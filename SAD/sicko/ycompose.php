<?php
session_start();
if ($_SESSION['sid'] == "") {
    header('Location:index.php');
}
$id = $_SESSION['sid'];
?>
<?php
include_once('connection.php');
@$to = $_POST['to'];
@$sub = $_POST['sub'];
@$msg = $_POST['msg'];
@$file = $_FILES['file']['name'];

$id = $_SESSION['sid'];

if (@$_REQUEST['send']) {
    if ($to == "" || $sub == "" || $msg == "") {
        $err = "FILL RELATED DATA FIRST";
    } else {
        $d = mysqli_query($con, "SELECT * FROM userinfo where user_name='$to'");
        $row = mysqli_num_rows($d);
        if ($row == 1) {
            mysqli_query($con, "INSERT INTO usermail values('','$to','$id','$sub','$msg','',sysdate())");
            echo '<script language="javascript">';
            echo 'alert("Message successfully sent")';
            echo '</script>';
        } else {
            $sub = $sub . "--" . "msg failed";
            mysqli_query($con, "INSERT INTO usermail values('','$id','$id','$sub','$msg','',sysdate())");
            echo '<script language="javascript">';
            echo 'alert("Message Not Sent")';
            echo '</script>';
        }
    }
}


if (@$_REQUEST['save']) {
    if ($sub == "" || $msg == "") {
        $err = "<font color='red'>Subject And Message Cannot Be Empty.</font>";
    } else {
        $query = "INSERT INTO draft values('','$id','$sub','$file','$msg',sysdate())";
        mysqli_query($con, $query);
        $err = "Saved.";
    }
}
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
    <!--LogOut checker-->
    <?php
    include_once('connection.php');
    error_reporting(1);

    $chk = $_GET['chk'];
    if ($chk == "logout") {
        unset($_SESSION['sid']);
        header('Location:index.php');
    }
    ?>
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
        <form method="post">
            <table>
                <?php echo $err; ?>
                <tr>
                    <th>To</th>
                    <th>
                        <input type="text" name="to" class="ip" /> </th>
                </tr>
                <tr>
                    <th>CC</th>
                    <th><input type="text" name="cc" class="ip" /></th>
                </tr>
                <tr>
                    <th>Subject</th>
                    <th><input type="text" name="sub" class="ip" /></th>
                </tr>
                <!--<tr>
                    <th>Attachments</th>
                    <th><input type="file" name="file" id="file" class="ip" /></th>
                </tr>-->
                <tr>
                    <th>Compose</th>
                    <th><textarea rows="4" cols="100" name="msg" class="ip"></textarea></th>
                </tr>
                <tr>
                    <th>
                        <button type="reset" value="Cancel">Cancel</button>
                    </th>
                    <th>
                        <button type="submit" name="send" value="Send">Send</button>
                        <!--<button type="submit" name="save" value="Save">Save</button>-->
                    </th>
                </tr>
            </table>
        </form>
    </div>

    <?php
    @$id = $_SESSION['sid'];
    @$chk = $_REQUEST['chk'];
    if ($chk == "vprofile") {
        include_once("editProfile.php");
    }
    if ($chk == "compose") {
        include_once('ycompose.php');
    }
    if ($chk == "sent") {
        include_once('ysent.php');
    }
    if ($chk == "trash") {
        include_once('trash.php');
    }
    if ($chk == "setting") {
        include_once('setting.php');
    }
    if ($chk == "chngPass") {
        include_once('chngPass.php');
    }
    if ($chk == "chngthm") {
        include_once('chngthm.php');
    }
    if ($chk == "draft") {
        include_once('draft.php');
    }
    if ($chk == "updnews") {
        include_once('latestupd.php');
    }

    ?>
</body>

</html>