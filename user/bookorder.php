<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>order book form</title>
    </head>

    <body>
      
        <header>
            <h1><center><b>ADD BOOK FORM</b></center></h1><br>
        </header>
    
        <section> 
             <form action="" method="post">
                    <p><center>user_id:<br> <input type="text" name="user_id" size="10" maxlength="10" required></center></p>
                    <p><center>user_firstname:<br> <input type="text" name="user_firstname" size="15" maxlength="30" required></center></p>
                    <p><center>user_lastname:<br> <input type="text" name="user_lastname" size="15" maxlength="30" required></center></p>
                    <p><center>addresss:<br> <input type="text" name="address" size="30" maxlength="50" required></center></p>
                    <p><center>phoneno:<br> <input type="text" name="phoneno" size="11" maxlength="15" required></center></p>
                    <p><center>bookname:<br> <input type="text" name="bookname" size="30" maxlength="50" required></center></p>
                     
                    <br><center> <input type="submit" name="submit" value="Register"></center>
            </form>
        </section>

    </body>

</html>

                <?php
                    if(isset($_POST["submit"]))
                    {
                        $link=mysqli_connect("localhost","root","");
                        mysqli_select_db($link,"olms");
                        mysqli_query($link,"insert into bookorder values('$_POST[user_id]','$_POST[user_firstname]','$_POST[user_lastname]','$_POST[address]','$_POST[phoneno]','$_POST[bookname]','','')"); 
                        
                       mysqli_query($link,"update book set availablecopy=availablecopy-1 where bookname='$_POST[bookname]'");
                    }
            ?>