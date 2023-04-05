<?php 

    $usr= "";
    $pw= "";

    if( isset($_REQUEST["un"]) ){
        $usr= $_REQUEST["un"];
        $pw= $_REQUEST["pw"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Request Handle</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        form div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        form div button{
            margin-top: 10px;
        }

        ul{
            list-style: none;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <form action="latihan3.php" method="get">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="un" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="pw" id="password">
        </div>
        <div>
            <button class='button'>Click Me</button>
        </div>
    </form>

    <div>
        <h1>Isi dari Form</h1>
        <ul>
            <li>Username: <?= $usr; ?></li>
            <li>🤍</li>
            <li>Password: <?= $pw; ?></li>
        </ul>
    </div>

</body>
</html>