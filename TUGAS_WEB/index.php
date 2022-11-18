<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// if(isset($_POST['login'])){
//     header("Location: login.php");
//     exit;
// }

require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAMESHOP</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- Link BoxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6ed6487098.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <header id="header">
        <div class="nav container">
            <p href="#" class="logo">Game<span><a>shop</a></span><span><x> For Admin</x></span></p>

            <div class="wrap">
                <div class="search">
                   <input type="text" class="searchTerm" placeholder="Search..">
                   <button type="submit" class="searchButton"><i class='bx bx-search'></i></button>
                   <a href="menu_crud.php">
                    <i class='bx bx-plus' ></i>
                   </a>
                </div>
            </div>
            
            <div class="navigation">
                <a href="#">Home</a>
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
            <!-- <button><a href="logout.php">Logout</a></button> -->
            <div class="logout">
                <a href="logout.php"><i class='bx bx-log-out'></i></a>
            </div>
        </div>
    </header>
    
    <section class="home container">
        <img src="gambar/sekiro1.png" alt="">
        <div class="home-text">
            <a href="#" class="btn">available now</a>
        </div>
    </section>

    <!-- TRANDING -->
    <section class="tranding container">
        <div class="heading">
            <i id="tran" class='bx bxs-flame'></i>
            <h2 id="tranding">Tranding Games</h2>
        </div>

        <div class="list-game">
            <a href="buy.php">
                <div class="game">
                    <div class="game-image game-1"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>Dark Souls III</h2>
                        </div>
                        <div class="harga">
                            <p>Rp 587 000</p>
                        </div>
                    </div>
                </div>

                <div class="game">
                    <div class="game-image game-2"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h3>Sekiro™ : Shadows Die Twice</h3>
                        </div>
                        <div class="harga">
                            <p>Rp 729 000</p>
                        </div>
                    </div>
                </div>

                <div class="game">
                    <div class="game-image game-3"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>Elden Ring</h2>
                        </div>
                        <div class="harga">
                            <p>Rp 599 000</p>
                        </div>
                    </div>
                </div>

                <div class="game">
                    <div class="game-image game-4"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h3>DARK SOULS ™: REMASTERED</h3>
                        </div>
                        <div class="harga">
                            <p>Rp 420 000</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- BROWSER -->
    <section class="browser container">
        <div class="heading">
            <i class='bx bxs-search-alt-2'></i>
            <h2>Browse</h2>
        </div>

        <div class="browser-bar">
            <a href="#new">NEW</a>
            <a href="#special">SPECIALS</a>
            <a href="#tranding">TRANDING</a>
            <button id="pencet" onclick="myFunction()" style="display: none;">Try it</button>
            <label for="pencet">
                <p>GENRE</p>
            </label>
        </div>
        <div id="myDIV" style="display: none;">
            <div class="genre">
                <table>
                    <tr>
                        <td>ACTION</td>
                        <td>FPS</td>
                        <td>SOULS LIKE</td>
                    </tr>
                    <tr>
                        <td>VISUAL NOVEL</td>
                        <td>ANIME</td>
                        <td>HORROR</td>
                    </tr>
                    <tr>
                        <td>RACING</td>
                        <td>JRPG</td>
                        <td>HACK & SLASH</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-- DEAL OF THE DAY -->
    <section class="deal container">
        <div class="heading">
            <i class="fa-solid fa-bullhorn"></i>
            <h2>Deal of the Day</h2>
        </div>

        <div class="deal-game">
            <a href="buy.php">
                <div class="game">
                    <div class="game-image game-5"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>Resident evil 2 remake</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>50%</x></span> <span><s>Rp 399 999</s></span>RP 199 999</p>
                        </div>
                    </div>
                </div>

                <div class="game">
                    <div class="game-image game-6"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>the witcher 3</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>80%</x></span> <span><s>Rp 359 999</s></span>RP 71 999</p>
                        </div>
                    </div>
                </div>
                <div class="dod">
                    Act fast before those deals are gone for good!
                </div>
        </a>  
        </div>
    </section>

    <!-- SPECIAL OFFERS -->
    <section class="special container">
        <div class="heading">
            <i class='bx bxs-discount'></i>
            <h2 id="special">Special Offers</h2>
        </div>
        
        <div class="special-offers">
            <a href="buy.php">
                <div class="game">
                    <div class="game-image game-7"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>code vein</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>75%</x></span> <span><s>Rp 499 000</s></span>RP 124 750</p>
                        </div>
                    </div>
                </div>
        
                <div class="game">
                    <div class="game-image game-8"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>far cry 5</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>85%</x></span> <span><s>Rp 619 000</s></span>RP 92 850</p>
                        </div>
                    </div>
                </div>
    
                <div class="game">
                    <div class="game-image game-9"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>devil may cry 5</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>70%</x></span> <span><s>Rp 423 999</s></span>RP 127 199</p>
                        </div>
                    </div>
                </div>
    
                <div class="game">
                    <div class="game-image game-10"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>Grand Theft Auto V</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>30%</x></span> <span><s> RP 300 750</s></span>RP 210 525</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </section>
    
    <!-- NEW REALEASES -->
    <section class="new-game container">
        <div class="heading">
            <i class='bx bx-plus' ></i>
            <h2 id="new">New Realeases</h2>
            <script src="main.js"></script>
        </div>

        <div class="new-realeases">
            <a href="buy.php">
                <div class="game">
                    <div class="game-image game-11"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>thymesia</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>20%</x></span> <span><s> RP 184 999</s></span>RP 147 999</p>
                        </div>
                    </div>
                </div>
    
                <div class="game">
                    <div class="game-image game-3"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>Elden Ring</h2>
                        </div>
                        <div class="harga">
                            <p>Rp 599 000</p>
                        </div>
                    </div>
                </div>
    
                <div class="game">
                    <div class="game-image game-12"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h2>persona 3 portable</h2>
                        </div>
                        <div class="harga">
                            <p><span><x>30%</x></span> <span><s> RP 259 999</s></span>RP 181 999</p>
                        </div>
                    </div>
                </div>
    
                <div class="game">
                    <div class="game-image game-13"></div>
                    <div class="game-text">
                        <div class="judul">
                            <h3>Assassin’s Creed Mirage</h3>
                        </div>
                        <div class="harga">
                            <p>Rp 867 000</p>
                        </div>
                    </div>
                </div> 
            </a>
        </div>
    </section>

    <div class="about-me container">
        <p id="aboutme">About Me</p>
        <div class="bio">
            <img src="gambar/about me.jpg">
            <table>
                <tbody>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Muhammad Dhimas Eko Wiyono</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td>2109106068</td>
                    </tr>
                    <tr>
                        <td>Prodi</td>
                        <td>:</td>
                        <td>Informatika</td>
                    </tr>
                    <tr>
                        <td>Angkatan&nbsp;</td>
                        <td>:&nbsp;</td>
                        <td>2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
    <div class="footer">
        <p id="footer"><a id="footer1">@Copyright 2022 - by Dhimas Eko</a></p>
    </div>
</body>
</html>