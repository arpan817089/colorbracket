<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "recipe_upload");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $user_id = $_POST['user_id'];
    $pass = $_POST['pass'];
    $q1 = "SELECT * FROM `user` WHERE `user_id` = '$user_id'";
    $e1 = mysqli_query($conn, $q1);
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        if (mysqli_num_rows($e1) > 0) {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Sorry!", "User already exist!", "error");';
            echo '}, 1000);</script>';
            echo ("<script>setTimeout(function (){window.location = 'registration.php'},1500);</script>");
        } 
        else {
            $stmt = $conn->prepare("insert into user(name,user_id,password) values(?,?,?)");
            $stmt->bind_param("sss", $name, $user_id, $pass);
            $execval = $stmt->execute();
            echo $execval;
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("","User Registered Successfully!", "success");';
            echo '}, 1000);</script>';
            echo ("<script>setTimeout(function (){window.location = '../login/login.php'},1500);</script>");
            $stmt->close();
            $conn->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
</body>
</html>