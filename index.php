<!DOCTYPE html>
<html>
<head>
    <title>File Uploads</title>
</head>

<body style="background-color:#DCD7D5;">
<div align="center">
        <h1 style="color:#D28140;">FileStore<br> Upload & Download Files Here!</h1>
        </div>
<div id="wrapperDiv">   
    <div id="div1" style="padding:20px;float:left;">
    <h2 style="display:inline; float:left; text-align:left; color:#D28140;">Uploads Here</h2>        
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
    </form>
     </div>     

    <div id="div2" style="padding:20px;float:left;">
    <h2 style="color:#D28140;">Downloads Here</h2>
    <?php
    $files = scandir("uploads");
    for($a = 2; $a < count($files); $a++)
    {
    ?>
    <p>
    <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
    </p>
     <?php
    }
    ?>
    </div>
        
</div> 
</body>
</html>