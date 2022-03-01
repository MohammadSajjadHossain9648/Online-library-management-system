<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>request order form</title>
    </head>

    <body>
  
        <h1><center><b>USER ORDER PROFILE</b></center></h1><br>
        <table class="table-bordered">
            <tr>
            <td>user_id</td>
            <td>bookname</td>
            <td>book_issue_date</td>
            </tr>
            <?php
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"olms");
            $res=mysqli_query($link,"select * from bookorder where user_id='$_SESSION[userid]'");
            while($row=mysqli_fetch_array($res))
            {
               echo "<tr>";
                
                echo "<td>";
                echo $row["user_id"];
                echo "</td>";
                
                echo "<td>";
                echo $row["bookname"];
                echo "</td>";
                
                echo "<td>";
                echo $row["book_issue_date"];
                echo "</td>";
                
               echo "</tr>";    
            }
            ?>
        </table>
    </body>

</html>