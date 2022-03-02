<?php
session_start();
$link=mysqli_connect("localhost","root","");
 mysqli_select_db($link,"olms");
 $res=mysqli_query($link,"update notification set read='yes' where user_id='$_SESSION[userid]'");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>user get message</title>
    </head>

    <body>
        
        <h1><center><b>GET NOTIFICATION TO USER</b></center></h1><br>   
        
        <table>
            <tr>
                <td>title</td>
                <td>message</td>
            </tr>
            
            <?php
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"olms");
            $res=mysqli_query($link,"select * from notification where user_id='$_SESSION[userid]'");
            while($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>"; echo $row["title"]; echo "</td>";
                echo "<td>"; echo $row["message"]; echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
        
    </body>

</html>
