<!DOCTYPE html>
<html>
    <head>
        <title>admin form</title>
    </head>

    <body>
  
        <h1><center><b>USER PROFILE</b></center></h1><br>

	<?php
           	$link = mysqli_connect("localhost","root","");
	    	mysqli_select_db($link,"olms");
		$res=mysqli_query($link,"select * from registration");
		echo "<table>";
		
		echo "<tr>";

		echo "<th>";echo "user_id";echo "</th>";
		echo "<th>";echo "user_firstname";echo "</th>";
		echo "<th>";echo "user_lastname";echo "</th>";
		echo "<th>";echo "address";echo "</th>";
		echo "<th>";echo "phoneno";echo "</th>";
		echo "<th>";echo "status";echo "</th>";
	        echo "<th>";echo "approved";echo "</th>";
        	echo "<th>";echo "not approved";echo "</th>";
		
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
            echo "<td>";?><a href="approve.php?id= <?php echo $row["id"]; ?>">Approve</a> <?php echo "</td>";
            echo "<td>";?><a href="notapprove.php?id= <?php echo $row["id"]; ?>">Not Approve</a> <?php echo "</td>";
		    
		    echo "</tr>";
		}
		
		echo "</table>";
        ?>

    </body>

</html>
