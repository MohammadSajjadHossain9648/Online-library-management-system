<!DOCTYPE html>
<html>
    <head>
        <title>add book form</title>
    </head>

    <body>
      <header>
            <div>
                <p style="color:deepskyblue;text-align: center; font-size: 40px" ><img src="headerpic.png" width="200px" height="110">ADD BOOK FORM</p>
            </div>  
        </header>
        <section>
        <form action="" method="post">
            <p><center>book_id:<br> <input type="text" name="book_id" size="10" maxlength="10" required></center></p>
            <p><center>bookname:<br> <input type="text" name="bookname" size="30" maxlength="50" required></center></p>
            <p><center>authorname:<br> <input type="text" name="authorname" size="30" maxlength="50" required></center></p>
            <p><center>publication_name:<br> <input type="text" name="publication_name" size="30" maxlength="50" required></center></p>
            <p><center>published_year:<br> <input type="text" name="published_year" size="10" maxlength="10" required></center></p>
            <p><center>cetagory:<br> <input type="text" name="cetagory" size="30" maxlength="50" required></center></p>
            <p><center>totalcopy:<br> <input type="text" name="totalcopy" size="3" maxlength="4" required></center></p>
            <p><center>availablecopy:<br> <input type="text" name="availablecopy" size="3" maxlength="4" required></center></p>
            <br><center> <input type="submit" name="submit" value="Register"></center>
        </form>
        </section>

	<?php
          if(isset($_POST["submit"]))
          {
            $link = mysqli_connect("localhost","root","");
	        mysqli_select_db($link,"olms");
            mysqli_query($link,"insert into book values('$_POST[book_id]','$_POST[bookname]','$_POST[authorname]','$_POST[publication_name]','$_POST[published_year]','$_POST[cetagory]','$_POST[totalcopy]','$_POST[availablecopy]')");
              ?>
           // <script type="text/javascript">
             //   alert("successfully added");
            //</script>
            
            <?php
          }
        ?>

    </body>

</html>
