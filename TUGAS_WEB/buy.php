<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
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
            <div class="title">PAYMENT PROCESS</div>
            <form action="payment_receipt.php" class="form" method="post">
                </div>
                <div class="inputfield">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="input" placeholder="Your name..." required>
                </div>  
                <div class="inputfield">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="input" placeholder="Your email..." required>
                </div> 
                <div class="inputfield">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" name="phoneNumber" class="input" placeholder="Your phone number..." required>
                </div>
                <div class="inputfield">
                    <label for="country">Select Country :</label>
                    <select class="country" name="country">
                        <option value="Indonesia">Indonesia</option>
                        <option value="Other...">Other...</option>
                    </select>
                </div> 
                <div class="inputfield">
                    <label for="phoneNumber">Payment Methodes</label>
                    <div class="metode">
                        <input type="radio" id="PAYPAL" name="methode" value="PAYPAL" required>
                        <label for="PAYPAL">PAYPAL</label><br>
                        <input type="radio" id="DANA" name="methode" value="DANA" required>
                        <label for="DANA">DANA</label><br>
                        <input type="radio" id="OVO" name="methode" value="OVO" required>
                        <label for="OVO">OVO</label><br>
                    </div>
                </div> 
                <div class="button">
                    <a href="index.php">
                        <button type="button" class="button-back">Back</button>
                    </a>
                    <input type="submit" class="button-confirm" name="submit"  onclick='check()' value="CONFIRM">
                </div>
            </form>
            </div>
        </div>
    </section>
    <div class="footer">
        <p id="footer"><a id="footer1">@Copyright 2022 - by Dhimas Eko</a></p>
    </div>
</body>
</html>