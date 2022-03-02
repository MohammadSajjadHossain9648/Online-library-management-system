<!DOCTYPE html>
<html>
    <head>
        <title>return book from user</title>
    </head>
    
    <body>
        <form action="" method="post">
            <table>
            <tr>
                <td>
                    <select>
                        <?php
                            $link=mysqli_connect("localhost","root","");
                            mysqli_select_db($link,"olms");
                            $res=mysqli_query($link,"select user_id from bookorder where book_return_date=''");
                            while($row=mysqli_fetch_array($res))
                            {
                                echo "<option>";
                                echo $row["user_id"];
                                echo "</option>";
                            }
                            ?> 
                    </select>
                </td>
                <td>
                    <input type="submit" value="submit" name="submit">  
                </td>
            </tr>
        </table>
        </form>
        
            <?php
                if(isset($_POST["submit"]))
                {
                    $link=mysqli_connect("localhost","root","");
                            mysqli_select_db($link,"olms");
                            $res=mysqli_query($link,"select * from registration");
                    
                    echo "<table>";
                    echo "<tr>";
                    
                    echo "<th>"; echo "user_id"; echo "</th>";
                    echo "<th>"; echo "user_firstname"; echo "</th>";
                    echo "<th>"; echo "user_lastname"; echo "</th>";
                    echo "<th>"; echo "address"; echo "</th>";
                    echo "<th>"; echo "phoneno"; echo "</th>";
                    echo "<th>"; echo "bookname"; echo "</th>";
                    echo "<th>"; echo "book_issue_date"; echo "</th>";
                    echo "<th>"; echo "return_book"; echo "</th>";
                    
                    echo "</tr>";
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";
                        echo "<th>"; echo $row["user_id"]; echo "</th>";
                        echo "<th>"; echo $row["user_firstname"]; echo "</th>";
                        echo "<th>"; echo $row["user_lastname"]; echo "</th>";
                        echo "<th>"; echo $row["address"]; echo "</th>";
                        echo "<th>"; echo $row["phoneno"]; echo "</th>";
                        echo "</tr>";            
                    }
                    $res=mysqli_query($link,"select * from bookorder where user_id='$_POST[user_id]'");
                    while($row=mysqli_fetch_array($res))
                    {
                        echo "<tr>";
                        echo "<th>"; echo $row["bookname"]; echo "</th>";
                        echo "<th>"; echo $row["book_issue_date"]; echo "</th>";
                        echo "<th>"; ?><a href="return.php?id=<?php echo $row["id"]; ?>">return_book</a><?php echo "</th>";
                        echo "</tr>";
                    }
                    echo "</table>";
                        
                }
        ?>
    </body>
</html>