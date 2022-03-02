<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>user information form</title>
    </head>

    <body>
  
        <h1><center><b>USER PROFILE</b></center></h1><br>

	<?php
        $link = mysqli_connect("localhost","root","");
	    mysqli_select_db($link,"olms");
	    $res=mysqli_query($link,"select * from registration where user_id = '$_SESSION[userid]'");
		
		echo "<table>";
		
		echo "<tr>";

		echo "<th>";echo "user_id";echo "</th>";
		echo "<th>";echo "user_firstname";echo "</th>";
		echo "<th>";echo "user_lastname";echo "</th>";
		echo "<th>";echo "address";echo "</th>";
		echo "<th>";echo "phoneno";echo "</th>";
		echo "<th>";echo "status";echo "</th>";

		echo "</tr>";

		while($row=mysqli_fetch_array($res))
		{
		    echo "<tr>";
			
		    echo "<td>";echo $row["user_id"];echo "</td>";
		    echo "<td>";echo $row["user_firstname"];echo "</td>";
		    echo "<td>";echo $row["user_lastname"];echo "</td>";
		    echo "<td>";echo $row["address"];echo "</td>";
		    echo "<td>";echo $row["phoneno"];echo "</td>";
		    echo "<td>";echo $row["status"];echo "</td>";

		    echo "</tr>";
		}
		
		echo "</table>";
        ?>

    </body>

</html>