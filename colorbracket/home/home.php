<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to ColorBracket</title>
    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" href="../image/cb.jpg" type="image/x-icon">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="menu">
                <h3 class="logo">ColorBracket</span></h3>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="main">
                <header>
                    <div class="overlay">
                        <div class="inner">
                            <img src="../image/com_logo.png" style="background-color: white;height:100px; width:300px">
                            <h1 class="title" data-text="[title_Name]">WELCOME TO</h1><br>

                            <h1 class="title" data-text="[title_Name]">RECIPE HOUSE</h1>

                        </div>
                    </div>
                </header>
            </div>

            <div class="shadow one"></div>
            <div class="shadow two"></div>
        </div>

        <div class="links">
            <ul>
                <li>
                    <a href="home.php" style="--i: 0.05s">HOME</a>
                </li>
                <li>
                    <a href="../registration/registration.php" style="--i: 0.1s" target="_blank">User Registration</a>
                </li>
                <li>
                    <a href="../login/login.php" style="--i: 0.1s" target="_blank">User Login</a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        const hamburger_menu = document.querySelector(".hamburger-menu");
        const container = document.querySelector(".container");
        hamburger_menu.addEventListener("click", () => {
            container.classList.toggle("active");
        })
    </script>

</body>

</html>