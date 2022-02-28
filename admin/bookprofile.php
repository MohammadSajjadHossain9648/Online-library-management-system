<!DOCTYPE html>
<html>
    <head>
        <title>book information</title>
    </head>

    <body>
  
        <h1><center><b>BOOK PROFILE</b></center></h1><br>

	<?php
           	$link = mysqli_connect("localhost","root","");
	    	mysqli_select_db($link,"olms");
		$res=mysqli_query($link,"select * from book");
		echo "<table>";
		
		echo "<tr>";

		echo "<th>";echo "book_id";echo "</th>";
		echo "<th>";echo "bookname";echo "</th>";
		echo "<th>";echo "authorname";echo "</th>";
		echo "<th>";echo "publication_name";echo "</th>";
		echo "<th>";echo "published_year";echo "</th>";
		echo "<th>";echo "cetagory";echo "</th>";
	    echo "<th>";echo "totalcopy";echo "</th>";
		echo "<th>";echo "availablecopy";echo "</th>";
		echo "<th>";echo "deletebook";echo "</th>";
		
        
		echo "</tr>";

		while($row=mysqli_fetch_array($res))
		{
		    echo "<tr>";
			
		    echo "<td>";echo $row["book_id"];echo "</td>";
		    echo "<td>";echo $row["bookname"];echo "</td>";
		    echo "<td>";echo $row["authorname"];echo "</td>";
		    echo "<td>";echo $row["publication_name"];echo "</td>";
		    echo "<td>";echo $row["published_year"];echo "</td>";
		    echo "<td>";echo $row["cetagory"];echo "</td>";
	        echo "<td>";echo $row["totalcopy"];echo "</td>";
            echo "<td>";echo $row["availablecopy"];echo "</td>";
            echo "<td>";?><a href="deletebook.php ? id=<?php echo $row["id"]?>">DELETE BOOK</a><?php echo "</td>";
            
		    echo "</tr>";
		}
		
		echo "</table>";
        ?>

    </body>

</html>
