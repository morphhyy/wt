<?php 
    include_once 'db.inc.php';
    session_start();
    $id = $_SESSION['userid'];
        if(isset($_POST['imgsubmit'])){
            $id = $_SESSION['userid'];
            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $description = mysqli_real_escape_string($conn, $_POST['descr']);
            $category = mysqli_real_escape_string($conn, $_POST['category']);

            $file = $_FILES['image'];
            $fileName = $file['name'];
            $fileSize = $file['size'];
            $fileLoc = $file['tmp_name'];
            $fileType = $file['type'];
            $fileError = $file['error'];
    
            $fileEx = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileEx));
    
            $allowed = array('png', 'jpg', 'jpeg');
    
            if(in_array($fileActualExt, $allowed) && $fileError === 0){
                $fileName = rand(1,100000).".".$fileActualExt;
                $fileDestination = "uploads/".$fileName;
                move_uploaded_file($fileLoc, $fileDestination);
                $sql = "INSERT INTO image (file, title, descr, category, userid, date) 
                        VALUES(?,?,?,?,?, now());";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('sssss',$fileName, $title, $description, $category, $id);
                $stmt->execute();
                $result = $stmt->get_result();
                header('Location: index.php?done');
            }else{
                echo "there is an error!";
            }

        }