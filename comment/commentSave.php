<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../connect/connect.php";	//db연결하고

    $youName = $_POST['youName'];	//form post으로
    $youText = $_POST['youText'];
    $regTime = time();

    // echo $youName;
    // echo $youText;

    $sql = "INSERT INTO myComment(youName, youText, regTime) VALUES('$youName', '$youText', '$regTime')";

    $result = $connect -> query($sql);

//     if($result){
//         echo "INSERT INTO 'true'";
//     }else{
//         echo "INSERT INTO 'false'";
//     }
?>

<script>
    location.href = "../index.html#comment";s
</script>
</body>
</html>