<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>message from admin to user</title>
    </head>

    <body>
  
        <h1><center><b>SEND NOTIFICATION TO USER</b></center></h1><br>
        
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <select>
                            <?php
                            $link=mysqli_connect("localhost","root","");
                            mysqli_select_db($link,"olms");
                            $res=mysqli_query($link,"select * from registration where status='yes'");
                            while($row=mysqli_fetch_array($res))
                            {
                                ?><option>
                                <?php echo $row["user_firstname"]."(".$row["user_id"].")"?>
                                </option><?php
                                $_POST[user_id]=$row["user_id"];
                                $_POST[user_firstname]=$row["user_firstname"];
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="title" placeholder="enter the title" maxlength="50" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="message" placeholder="enter message" maxlength="1000" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
        
        <?php
        if(isset($_POST["submit"]))
        {
          $link=mysqli_connect("localhost","root","");
          mysqli_select_db($link,"olms");
          mysqli_query($link,"insert into notification values('$_POST[user_id]','$_POST[user_firstname]','$_POST[title]','$_POST[message]','no')") or die(mysqli_error($link));
          ?>
            <script>
                alert("message sent successfully");
        </script>
        <?php
        }
        ?>
    </body>

</html>
