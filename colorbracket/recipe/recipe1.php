<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "recipe_upload");
$q1 = "SELECT * FROM `recipe`";
$e1 = mysqli_query($conn, $q1);

extract($_REQUEST);
$q2 = "SELECT * FROM `user` WHERE `user_id` = '$x'";
$e2 = mysqli_query($conn, $q2);
$res2 = mysqli_fetch_row($e2);
$name = $res2[1];

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="../registration/registration.css">
    <link rel="shortcut icon" href="../image/cb.jpg" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    ::after * {
        box-sizing: border-box;
    }

    .row {
        margin-left: 50px;
        margin-right: -5px;
    }

    .column {
        float: left;
        width: 95%;
        padding: 5px;
    }


    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid black;

    }

    th,
    td {
        text-align: left;
        padding: 26px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    @media screen and (max-width: 600px) {
        .column {
            width: 80%;
        }
    }
</style>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="Volunteer/index.php"><i class='bx bx-laptop'></i></a>
            <i class='bx bx-menu' id="btn"></i>
        </div>

        <li class="profile">
            <a href="../login/login.php"><i class="bx bx-log-out" id="log_out"></i> </a>
        </li>
    </div>
    <section class="home-section">
        <div style="padding: 10px 10px; background-color: lightgreen">
            <h2>Welcome <?php echo "$name &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp USER-Id:$res2[2]"; ?></h2>
        </div>

        <div><br>
            <div class="row">
                <div class="column">
                    <table>
                        <h2 style="text-align: center;">Recipes</h2><br>
                        <tr>
                            <th>Sl No</th>
                            <th>Recipe Name</th>
                            <th>Creater Name</th>
                            <th>Description</th>
                            <th>Image</th>
                        </tr>
                        <tr>
                            <?php $num = 1;  ?>
                            <?php while ($r = mysqli_fetch_array($e1)) {
                            ?>
                                <td><?php echo $num++ ?></td>
                                <td><a href="../recipe/recipe2.php?x=<?php echo  $r['name']; ?>"><?php echo $r['name'] ?></a></td>
                                <?php
                                $cr_id = $r['creator_id'];
                                $q3 = "SELECT * FROM `user` WHERE `id` = '$cr_id'";
                                $e3 = mysqli_query($conn, $q3);
                                $res3 = mysqli_fetch_row($e3);
                                ?>
                                <td><?php echo $res3[1]; ?></td>
                                <td> <?php echo $r['desc'] ?> </td>
                                <td><img src="<?php echo $r['image_url']; ?>" height="100px" width="100px"></td>
                        </tr>
                    <?php
                            }
                    ?>
                    </table>
                    <a style="color: white;" href="../login/login.php"><button type="submit" id="but1" style="height:20px;padding-bottom:2rem;width:100px;margin-top:2rem;margin-left: 57rem;" class="btn-wide btn btn-success">Back</button></a>
                </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>