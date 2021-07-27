<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/header.css">
<html>
<header>
        <nav>
            <div class="nav-first">
                <span class="logo">MySite</span>
                <form id="search-box" class="search-box" method="get" action="search.php">
                    <span class="search-icon">&#x1F50D;</span>
                    <input type="text" placeholder="Search.." name="search" id="searchvalue">
                </form>
            </div>
            <div class="nav-second">
                <ul class="nav-links">
                    <li class="chg"><a href="index.php">Home</a></li>
                    <li class="chg"><a href="#">About</a></li>
                    <li class="chg"><a href="#">Hiring</a></li>
                    <li class="chg"><a href="#">Design</a></li>
                    <li class="chg"><a href="#">Contact Us</a></li>
                    
                    <?php 
                        include_once 'db.inc.php';
                        session_start();

                        if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
                            echo '<li class="chg nav-button upload-nav"><a href="#">Upload</a></li>
                                  <li class="chg nav-button upload-nav"><a href="update.php">Update</a></li>
                                  <li class="chg nav-button" id="logout"><a href="logout.php">Logout</a></li>
                            ';
                        }else{
                            echo '<li class="chg nav-button" id="login-reg"><a href="#">Login/Register</a></li>';
                        }
                    ?>
                
                </ul>
            </div>
        </nav>
    </header>
    </html>