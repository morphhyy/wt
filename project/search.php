<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/header.css">

<?php 
    include_once 'db.inc.php';
    include 'includes/header.php';

    if(isset($_GET['search'])){
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $sql = "SELECT * FROM image where title LIKE ? 
                OR descr LIKE ? OR category LIKE ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $search, $search, $search);
        $stmt->execute();
        $result = $stmt->get_result();
        $rowCount = $result->num_rows;
        if($result->num_rows > 0){
            echo '
            <div class="container">
                <div class="image-gallery">
                    <ul id="front-gallery">
            ';

            while($row = $result->fetch_assoc()){
                echo "<li>
                      <img class='size' src='uploads/".$row['file']."'>
                      </li>
                    ";
            }
        }else{
            echo "<h2>NOT FOUND</h2>";
        }

        echo '
        <li></li>
                </ul>
            </div>
        </div>
        ';
        echo '
            <br><input type="button" value="Go Back" 
            onclick="history.back(-1)" />';
    }
?>