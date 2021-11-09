<?php
if (isset($_POST['submit']))
{
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','jfif','png','pdf','docx');

    if(in_array($fileActualExt, $allowed))
    {
        if($fileError === 0){
            if($fileSize < 5000000){
                $fileDestination = 'uploads/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccessful");
            }
            else{
                echo "File Is Too Big";
            }
        }
        else{
            echo "Error Uploading File";
        }
            echo  "Wrong File Type";
    }
}