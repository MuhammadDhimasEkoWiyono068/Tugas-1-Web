<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resi_Pembayaran</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- Link BoxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6ed6487098.js" crossorigin="anonymous"></script>
    
</head>
<body>   
    <header id="header">
        <div class="nav container">
        <p href="#" class="logo">Game<span><a >shop</a></span></p>


            <div class="wrap">
                <div class="search">
                   <input type="text" class="searchTerm" placeholder="Search..">
                   <button type="submit" class="searchButton"><i class='bx bx-search'></i></button>
                </div>
            </div>
            
            <div  class="navigation">
                <a href="index.php">Home</a>
                <a id="me" onclick="popup()"href="#aboutme">About Me</a>
            </div>
            <div class="darkmode">
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="label">
                    <i class='bx bxs-sun' ></i>
                    <i class='bx bxs-moon' ></i>
                    <div class="ball"></div>
                </label>
            </div>
            <script src="main.js"></script>

        </div>
    </header>
    <section class='order'>
        <div class="wrapper">
            <div class="title">PAYMENT RECEIPT</div>
            <?php
            $name = $_POST['name'];
            $selectOption = $_POST['country'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phoneNumber'];
            $radioVal = $_POST["methode"];
            ?>
            <div>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $name . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $email . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $phoneNumber . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $selectOption . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Payment Methodes</td>
                        <td>:</td>
                        <td>
                        <?php
                            $radioVal = $_POST["methode"];

                            if($radioVal == "PAYPAL")
                            {
                                echo("PAYPAL");
                            }
                            else if ($radioVal == "DANA")
                            {
                                echo("DANA");
                            }
                            else if ($radioVal == "OVO")
                            {
                                echo("OVO");
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="code">
                Game code will be received by email.
            </div>
            <div class="button">
                <a href="index.php">
                    <button type="button" class="button-done">Done</button>
                </a>
            </div>
        </div>
    </section>
    <div class="footer">
        <p id="footer"><a id="footer1">@Copyright 2022 - by Dhimas Eko</a></p>
    </div>
</body>
</html>