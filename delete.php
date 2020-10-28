<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery = "delete from jobregistration where id=$id";

$res = mysqli_query($con, $deletequery);

if ($res){
?>
    <script>
        alert("deleted successfully");
    </script>
<?php
} else {
?>
    <script>
        alert("Not deleted");
    </script>
<?php
}

header('location:display.php');
?>