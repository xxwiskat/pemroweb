<?php

    $filex= "";
    $path= "img/";

    if( isset($_POST["upFile"]) ):
        
        $filex= $path . basename($_FILES["inFile"]["name"]);
        move_uploaded_file($_FILES["inFile"]["tmp_name"], $filex);

    endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload File</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            height: 100vh;
        }
        form div{
            margin-bottom: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .gambar{
            margin: 50px auto;
            width: 800px;
            height: 800px;
            border: 2px solid black;
        }
        .gambar img{
            width: 100%;
            height: 100%;
            background-size: cover;
        }
    </style>
</head>
<body>
    
    <form action="latihan4.php" method="post" enctype="multipart/form-data">

        <div>
            <label for="inFile">Input File</label>
            <input type="file" name="inFile" id="inFile">
        </div>
        <div>
            <button type="submit">Upload File</button>
        </div>
        <input type="hidden" name="upFile" value="okay">

    </form>

    <div class="gambar">
        <?= "<img src='$filex' alt='UR CRUSH'>"  ?>
    </div>

</body>
</html>