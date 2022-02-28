<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>admin information form</title>
    </head>

    <body>
        <h1><center><b>ADMIN PROFILE</b></center></h1><br>

	   <?php
        $link = mysqli_connect("localhost","root","");
	    mysqli_select_db($link,"olms");
		$res=mysqli_query($link,"select * from admin_registration where admin_id='$_SESSION[adminid]'");
		echo "<table>";
		
		echo "<tr>";

		echo "<th>";echo "admin_id";echo "</th>";
		echo "<th>";echo "admin_firstname";echo "</th>";
		echo "<th>";echo "admin_lastname";echo "</th>";
		echo "<th>";echo "address";echo "</th>";
		echo "<th>";echo "phoneno";echo "</th>";
		echo "<th>";echo "status";echo "</th>";

		echo "</tr>";

		while($row=mysqli_fetch_array($res))
		{

		    echo "<tr>";
			
		    echo "<td>";echo $row["admin_id"];echo "</td>";
		    echo "<td>";echo $row["admin_firstname"];echo "</td>";
		    echo "<td>";echo $row["admin_lastname"];echo "</td>";
		    echo "<td>";echo $row["address"];echo "</td>";
		    echo "<td>";echo $row["phoneno"];echo "</td>";
		    echo "<td>";echo $row["status"];echo "</td>";

		    echo "</tr>";
		}
		
		echo "</table>";
        ?>

    </body>

</html>
