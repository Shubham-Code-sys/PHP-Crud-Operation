<!DOCTYPE html>
<html lang="en">

<head>
    <title>Database List</title>

    <?php include "links.php" ?>
</head>

<body>
    <div class="table-responsive container">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>degree</th>
                    <th>mobile</th>
                    <th>email</th>
                    <th>refer</th>
                    <th>post</th>
                    <th colspan="2">operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";

                $selectquery = "select * from jobregistration";
                $query = mysqli_query($con, $selectquery);
                $nums = mysqli_num_rows($query);


                while ($res = mysqli_fetch_array($query)) {

                    ?>

                    <tr>
                    <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['degree'];?></td>
                    <td><?php echo $res['mobile'];?></td>
                    <td><?php echo $res['email'];?></td>
                    <td><?php echo $res['refer'];?></td>
                    <td><?php echo $res['jobpost'];?></td>
                    <td><a href="updates.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="UPDATE"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="DELETE"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                <?php
                }

                ?>
                
            </tbody>
        </table>
    </div>
</body>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</html>