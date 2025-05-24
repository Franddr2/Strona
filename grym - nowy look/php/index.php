<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>AAAAAAAAAAAAAAAAAA</h1>
    <?php 

    $conn = mysqli_connect("localhost", "root", "", "capture");
    
    if($conn){
        echo"polaczyles sie";
    }else{
        echo"Nie poszlo :(";
    }
    ?>
    <h1>BBBBBBBBBBBBBBBBBB</h1>

</body>
</html>