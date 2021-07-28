<?php

$Name=$_POST['portusername'];
$Email=$_POST['portusermail'];
$problem=$_POST['portusermsg'];

$connection=mysqli_connect("sql301.epizy.com","epiz_29222017","7n5SHxKr92","epiz_29222017_XXX");

$INSERT ="INSERT INTO portform (portusername,portusermail,portusermsg)Values('$Name','$Email','$problem')";
mysqli_query($connection,$INSERT);
echo "<script> alert('Thank you for your message','$Name')</script> ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Say hi</title>
    <link rel="stylesheet" href="../CSS/Sayhi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h4 class="my-4" >
        Our team will contect you ASAP 
        <a  href="../HTML/Sayhi.html" type="button"  class="btn btn-primary">Back </a>

    </h4>

</body>
</html>