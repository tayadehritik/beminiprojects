<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include_once('connection.php');
    error_reporting(1);
    $y = $_POST['y'];
    $m = $_POST['m'];
    $d = $_POST['d'];
    $dob = $y . "-" . $m . "-" . $d;
    $ch = $_POST['ch'];
    $hobbies = implode(",", $ch);
    $imgpath = $_FILES['file']['name'];
    $un = $_POST['un'];
    if ($_POST['reg']) {
        if ($_POST['un'] == "" || $_POST['pwd'] == "") {
            $err = "Enter you username!!";
        } else {
            $r = mysqli_query($con, "SELECT * FROM userinfo where user_name='{$_POST['un']}'");

            $t = mysqli_num_rows($r);
            if ($t == 1) {
                $err = "User already exists choose another";
            } else {
                mysqli_query($con, "INSERT INTO userinfo values('','{$_POST['un']}','{$_POST['pwd']}','{$_POST['mob']}','{$_POST['eid']}','{$_POST['gen']}','$hobbies','$dob',
			'$imgpath')");
                mkdir("userImages/$un");
                move_uploaded_file($_FILES["file"]["tmp_name"], "userImages/$un/" . $_FILES["file"]["name"]);
                $_SESSION['sname'] = $_POST['un'];
                //header('location:index.php?chk=5');
                echo "<script>window.location='ywelcome.php'</script>";
            }
        }
    }

    ?>
    <header>
        <h4>SickoMail</h4>
        <nav>
            <ul class="nav__links">
                <li><a href="index.php"><button>LOGIN</button></a></li>
                <li><a href="yaboutus.php"><button>ABOUT US</button></a></li>
            </ul>
        </nav>
    </header>
    <div class="inbox">
        <div class="inboxtable">
            <form method="post" enctype="multipart/form-data">
                <table>
                    <font color="#FF0000"><?php echo $err; ?></font>
                    <tr>
                        <td>Enter Your User Name </td>
                        <td><input type="text" name="un" /></td>
                    </tr>
                    <tr>
                        <td>Enter Your Password </td>
                        <td><input type="password" name="pwd" /></td>
                    </tr>
                    <tr>
                        <td>Enter Your Mobile </td>
                        <td><input type="text" name="mob" /></td>
                    </tr>
                    <tr>
                        <td>Enter Your Email </td>
                        <td><input type="email" name="eid" /></td>
                    </tr>
                    <tr>
                        <td>Select Your Gender </td>
                        <td>
                            Male<input type="radio" name="gen" value="Male" />
                            Female<input type="radio" name="gen" value="Female" />
                        </td>
                    </tr>
                    <tr>
                        <td>Select Your DOB </td>
                        <td>
                            <select name="y">
                                <option value="">Year</option>
                                <?php
                                for ($i = 1900; $i <= 2013; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                            <select name="m">
                                <option value="">Month</option>
                                <?php
                                for ($i = 1; $i <= 12; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                            <select name="d">
                                <option value="">Date</option>
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                    echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                   
                    <tr>
                        <td align="center" colspan="2">
                            <button type="submit" name="reg" value="Register">Register</button>
                            <button type="reset" value="Reset">Reset</button>
                        </td>
                    </tr>
            </form>
            <br><br><br>
        </div>
    </div>
</body>

</html>