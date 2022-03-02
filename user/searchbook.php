<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>search book form</title>
    </head>

    <body>
  
        <h1><center><b>USER SEARCH BOOK</b></center></h1><br>
        
        <form action="" method="post">
            <table>
                <tr>
                    <td><input type="text" name="bookname" placeholder="enter book name" required></td>
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST["submit"]))
        {
        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"olms");
        $res=mysqli_query($link,"select * from book where bookname like('%$_POST[bookname]%')");
        
        echo "<table>";
        echo "<tr>";
        while($row=mysqli_fetch_array($res))
        {
           echo "<td>";
           echo "<b>"."book_id: ".$row["book_id"]."</b>";
            echo "<br>";
            echo "<b>"."bookname: ".$row["bookname"]."</b>";
            echo "<br>";
            echo "<b>"."authorname: ".$row["authorname"]."</b>";
           echo "<br>";
            echo "<b>"."cetagory: ".$row["cetagory"]."</b>";
            echo "<br>";
            echo "<b>"."totalcopy: ".$row["totalcopy"]."</b>";
            echo "<br>";
            echo "<b>"."availablecopy: ".$row["availablecopy"]."</b>";
            echo "<br>";
           echo "</td>";
         
        }
        echo "</tr>";
        echo "</table>";
        }
        else
    	{  
        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"olms");
        $res=mysqli_query($link,"select * from book");
        $i=0;
        echo "<table>";
        echo "<tr>";
        while($row=mysqli_fetch_array($res))
        {
          $i=$i+1;
           echo "<td>";
           echo "<b>"."book_id: ".$row["book_id"]."</b>";
            echo "<br>";
            echo "<b>"."bookname: ".$row["bookname"]."</b>";
            echo "<br>";
            echo "<b>"."authorname: ".$row["authorname"]."</b>";
           echo "<br>";
            echo "<b>"."cetagory: ".$row["cetagory"]."</b>";
            echo "<br>";
            echo "<b>"."totalcopy: ".$row["totalcopy"]."</b>";
            echo "<br>";
            echo "<b>"."availablecopy: ".$row["availablecopy"]."</b>";
            echo "<br>";
           echo "</td>";
        }
        echo "</tr>";
        echo "</table>";
        }   
        ?>

    </body>

</html>