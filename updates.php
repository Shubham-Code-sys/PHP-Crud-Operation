<?php

?>

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
            <?php

            include 'connection.php';

            $ids = $_GET['id'];

            $showquery = "select * from jobregistration where id = {$ids}";

            $showdata = mysqli_query($con, $showquery);

            $arrdata = mysqli_fetch_array($showdata);

            if (isset($_POST['submit'])) {
                $idupdate = $_GET['id'];
                $name = $_POST['name'];
                $qualification = $_POST['qualification'];
                $number = $_POST['number'];
                $email = $_POST['email'];
                $refer = $_POST['refer'];
                $jobprofile = $_POST['jobprofile'];

                $insertquery = "insert into jobregistration(name, degree, mobile, email, refer, jobpost) 
                                values('$name', '$qualification', '$number', '$email', '$refer', '$jobprofile')";

                $query = "update jobregistration set name='$name', degree='$qualification', 
                mobile='$number', email='$email', refer='$refer', jobpost='$jobprofile' where id=$idupdate";

                $res = mysqli_query($con, $query);

                if ($res) {
            ?>
                    <script>
                        alert("data updated properly");
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("data not updated");
                    </script>
            <?php
                }
            }

            ?>
            <input type="text" name="name" placeholder="Enter your name" value="<?php echo $arrdata['name'];?>" required>
            <input type="text" name="qualification" placeholder="Enter your Qualification" value="<?php echo $arrdata['degree'];?>" required><br><br>
            <input type="text" name="number" placeholder="Enter your Mobile Number" value="<?php echo $arrdata['mobile'];?>" required>
            <input type="text" name="email" placeholder="Enter your e-mail ID" value="<?php echo $arrdata['email'];?>" required><br><br>
            <input type="text" name="refer" placeholder="Any Reference" value="<?php echo $arrdata['refer'];?>" required>
            <input type="text" name="jobprofile" value="<?php echo $arrdata['jobpost'];?>" readonly><br><br>
            <input type="submit" name="submit" value="UPDATE"><br><br>

        </form>
        <a href="display.php"><button>Check Now</button></a>    
    </div>
</body>

</html>