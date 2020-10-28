<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DB Table</title>
        <?php include 'links.php' ?>
    </head>
    <body>
        <div class="container">
            <form method="POST">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="text" name="qualification" placeholder="Enter your Qualification" required><br><br>
                <input type="text" name="number" placeholder="Enter your Mobile Number" required>
                <input type="text" name="email" placeholder="Enter your e-mail ID" required><br><br>
                <input type="text" name="refer" placeholder="Any Reference" required>
                <input type="text" name="jobprofile" value="WEB DEVELOPER" readonly><br><br>
                <input type="submit" name="submit" value="Register"><br><br>

            </form>
            <a href="display.php"><button>Check Now</button></a>
        </div>
    </body>
</html>

<?php

include 'connection.php' ;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];

    $insertquery = "insert into jobregistration(name, degree, mobile, email, refer, jobpost) 
    values('$name', '$qualification', '$number', '$email', '$refer', '$jobprofile')";

    $res = mysqli_query($con, $insertquery);

    if ($res) {
        ?>
        <script>
            alert ("data inserted properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert ("data not inserted");
        </script>
        <?php
    }
    
}

?>