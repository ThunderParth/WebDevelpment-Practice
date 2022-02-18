<?php
    include "config.php";
    $sql = " SELECT * FROM Test";

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <body>
        <div>
            <h2>users</h2>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>PhNo</th>
                    <th>Address</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    if($result->num_rows>0)
                    {
                        while($row = $result->fetch_assoc()){
                ?>

                            <tr>
                                <td><?php echo $row['ID'];?></td>
                                <td><?php echo $row['Name'];?></td>
                                <td><?php echo $row['Email'];?></td>
                                <td><?php echo $row['PhNo'];?></td>
                                <td><?php echo $row['Addr'];?></td>
                                <td><a href="update.php?ID=<?php echo $row['ID'];?>">Edit</a>&nbsp;
                                <a href="delete.php?ID=<?php echo $row['ID'];?>">Delete</a>
                                </td>
                            </tr>
                <?php   }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>

