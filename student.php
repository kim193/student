<?php
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    

    $host = 'localhost';
    $user = 'root';
    $pass ='';
    $dbname='management_student';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO student(firstName,lastName,gender,age) value ('$firstName','$lastName','$gender','$age')";
    if (!mysqli_query($conn, $sql)) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <form action="#" method ="POST">
        firstName : <input type ="firstname" name ="firstName"><br>
        lastName: <input type ="lastname" name = "lastName"><br>
        gender: <input type ="gender" name ="gender"> <br>
        age: <input type="age" name = "age"><br>

        <input type ="submit" name="submit" value="Send Data">
    </from>


    
</body>
</html>