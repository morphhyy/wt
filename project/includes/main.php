<?php 
    include_once 'db.inc.php';
?>
<html>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/verify.js" defer></script>
    <body>
    <main>
        <!-- Upload File Section -->
        <?php 
        if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
            $id = $_SESSION['userid'];
        ?>
        <div class="upload-toggle">
        <form action="upload.php" enctype="multipart/form-data" method="post">
            <input type="text" placeholder="Title" name="title">
            <input type="text" placeholder="Description">
            <select name="category">
                <option value="streetpho">Street Photography</option>
                <option value="nature">Nature</option>
                <option value="wallpaper">Wallpaper</option>
                <option value="trave">Travel</option>
                <option value="people">People</option>
                <option value="film">Film</option>
                <option value="animals">Animals</option>
                <option value="food&drink">Food & Drink</option>
                <option value="history">History</option>
                <option value="anime">Anime</option>
            </select>
            <input type="file" name="image">
            <input type="submit" name='imgsubmit' value="Upload Image">
        </form>
        </div>
        <?php 
        }elseif(isset($_COOKIE['userid']) && isset($_COOKIE['username'])){
            $_SESSION['userid'] = $_COOKIE['userid'];
            $_SESSION['username'] = $_COOKIE['username'];
            header('Location: index.php');
        }
        ?>
        
            <div class="container">
                <div class="image-gallery">
                    <ul id="front-gallery">
                    <?php 
                        $sql = "SELECT * FROM image ORDER BY id DESC;";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $rowCount = $result->num_rows;

                        if($rowCount > 0){
                            while($row = $result->fetch_assoc()){
                                echo "<li>
                                    <img class='size' src='uploads/".$row['file']."'>
                                    </li>
                                ";
                            }
                        }else{
                            echo "No Images!!!";
                        }
                    
                    ?>
                        <li></li>
                    </ul>
                </div>
            </div>
        </main>

        <section class="extra">
            <div id="login-reg-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <ul class="switcher">
                            <li id="login-switch"><a href="#login" class="selected">Login</a></li>
                            <li id="register-switch"><a href="#register">Register</a></li>
                        </ul>
                    </div>
                    <div class="modal-body">
                        <div class="modal-form" id="loginForm"></div>
                        <div class="modal-form" id="registerForm"></div>
                    </div>
                </div>
            </div>

            <div class="hidden">
                <div id="loginPanel">
                    <form method="post" id='signin-form'>
                        <div>
                            <input type="text" placeholder="Enter username" name="username" pattern="[a-zA-Z0-9]+" id="login-username" />
                        </div>
                        <br>
                        <div>
                            <input type="password" placeholder="Enter password" name="password" id="login-password"/>
                        </div>
                        <br>
                        <div>
                            <label for="showpass">Show password</label>
                            <input type="checkbox" id="showpass" onchange="showPassword()">
                        </div>
                        <br>
                        <input type="submit" class="modal-submit" name="login" id="button" value="Login">
                        <div class="error">
                            <pre id='login-message'></pre>
                        </div>
                    </form>
                </div>
                <div id="registerPanel">
                    <form method="post" id="register-form" action="register.php">
                        <div>
                            <input type="text" placeholder="Enter username" name="username" id='reg-username' pattern="[a-zA-Z0-9]+" onchange="check(this)" />
                            <pre style="color:red" id="message-reg-username"></pre>
                        </div>
                        <br>
                        <div>
                            <input type="email" placeholder="Enter email" id='reg-email' name="email" onchange="check(this)" />
                            <pre style="color:red" id="message-reg-email"></pre>
                        </div>
                        <br>
                        <div>
                            <input type="password" placeholder="Enter password" id="reg-password" name="password" />
                        </div>
                        <br>
                        <input type="submit" name="register-button" id="button" value="Register">
                    </form>
                </div>
            </div>
        </section>
        </body>
    </html>