
<?php
// session_start();
$conn = mysqli_connect("localhost", "root", "", "recipe_upload");
$msg = "";
if (isset($_POST['login'])) {
    $user_id = $_POST['user_id'];
    $pass = $_POST['pass'];
    $q1 = "SELECT * FROM `user` WHERE `user_id` = '$user_id'";
    $q2 = "SELECT * FROM `user` WHERE `password` = '$pass'";
    $e1 = mysqli_query($conn, $q1);
    $res1 = mysqli_fetch_row($e1);
    $e2 = mysqli_query($conn, $q2);
    $res2 = mysqli_fetch_row($e2);
    if ((mysqli_num_rows($e1) > 0) && (mysqli_num_rows($e2) > 0) && ($res1[3] == $res2[3])) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("","User Login Successfully!", "success");';
        echo '}, 1000);</script>';
        echo ("<script>setTimeout(function (){window.location = '../recipe/recipe1.php?x=$user_id'},1500);</script>");
    } else {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Sorry!", "Invalid Login Details!", "error");';
        echo '}, 1000);</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login Page</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="../image/cb.jpg" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .button2 {
            background-color: #46C646;
            border-radius: 50px;
        }
    </style>

</head>

<body>
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <img src="../image/com_logo.png" style="margin-top:11rem;"><br>
                <form action="" method="post">
            </div>
        </div>


        <div class="right">
            <h5>Login</h5>
            <div class="inputs">
                <input type="text" name="user_id" placeholder="User ID">
                <input type="text" name="pass" placeholder="Password">
            </div>
            <div>
                <input type="submit" class="button button2" style="cursor:pointer;" name="login" value="Login"></input>
                </form>
            </div>
        </div>
        <br>


    </div>



    <!-- partial -->

</body>

</html>