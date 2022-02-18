<?php
    include "config.php";

    // $name = $email = $phno = $addr = "";
    
    if(isset($_POST['update'])){
                echo "bye";

        $userId = $_GET['ID'];
        $name = $_REQUEST["fname"];
        $email = $_REQUEST["username"];
        $phno = $_REQUEST["phno"];
        $addr = $_REQUEST["address"];

        $sql = " UPDATE test SET 
        `Name` = '$name',
        `Email` = '$email',
        `PhNo` = $phno,
        `Addr` = '$addr'
        WHERE `test`.`ID`=$userId ";

        // UPDATE `test` SET `Name` = 'test16', `Addr` = 'address16' WHERE `test`.`ID` = 5


        $result = $conn->query($sql);

        if($result == TRUE)
            echo '<h3>updated successfully click <a 
            href="./view.php"> 
            here </a>to see table</h3>';
        else
            echo "Error:" . $sql . "</br>" . $conn->error;
    }

    if(isset($_GET['ID'])){
        echo "hi";
        $userId = $_GET['ID'];

        $sql = " SELECT * FROM Test WHERE ID=$userId";

        $result = $conn->query($sql);
        // echo "hi";
        if($result->num_rows>0)
                    {
                        while($row = $result->fetch_assoc()){
                            $name = $row['Name'];
                            $email = $row['Email'];
                            $phno = $row['PhNo'];
                            $addr = $row['Addr'];
                        }
                        ?>

                        <!-- <div class="form_container"> -->
                            <form
                                action=""
                                method="post"
                            >
                                <table class="center">
                                    <tr>
                                        <td><lable for="fname" class="fname">First Name: </lable></td>
                                        <td>
                                            <input
                                                type="text"
                                                name="fname"
                                                id="fname"
                                                placeholder="Enter your First Name here"
                                                value="<?php echo $name;?>"
                                            />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><label for="address">Address: </label></td>
                                        <td><input type="text" name="address" id="address" value="<?php echo $addr;?>"/></td>
                                    </tr>

                                    <tr>
                                        <td><label for="username">Email ID: </label></td>
                                        <td><input type="email" name="username" id="email" value="<?php echo $email;?>" /></td>
                                    </tr>

                                    <tr>
                                        <td><label for="phno">Phone Number: </label></td>
                                        <td>
                                            <input type="number" name="phno" id="phno" maxlength="10" value="<?php echo $phno;?>" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <!-- <td class="reset"><input type="reset" value="Reset" /></td> -->
                                        <td class="submit"><input type="submit" name="update" value="update" /></td>
                                    </tr>
                                </table>
                            </form>
                        <!-- </div> -->
                <?php
                    }

                else{
                    header('Location: view.php');
                }
    }