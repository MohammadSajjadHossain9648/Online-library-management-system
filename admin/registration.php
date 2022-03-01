<!DOCTYPE html>
<html>
    <head>
        <title>registration form</title>
    </head>

    <body>
        <header>
            <div>
                <p style="color:deepskyblue;text-align: center; font-size: 40px" ><img src="headerpic.png" width="200px" height="110">ADMIN REGISTRATION PAGE</p>
            </div>  
        </header>
        
        <section> 
             <form action="" method="post">
                    <p><center>admin_id:<br> <input type="text" name="admin_id" size="10" maxlength="10" required></center></p>
                    <p><center>admin_firstname:<br> <input type="text" name="admin_firstname" size="15" maxlength="30" required></center></p>
                    <p><center>admin_lastname:<br> <input type="text" name="admin_lastname" size="15" maxlength="30" required></center></p>
                    <p><center>password:<br> <input type="password" name="password" size="10" maxlength="15" required></center></p>
                    <p><center>addresss:<br> <input type="text" name="address" size="30" maxlength="50" required></center></p>
                    <p><center>phoneno:<br> <input type="text" name="phoneno" size="11" maxlength="15" required></center></p>
                    <center> <input class="btn btn-default submit " type="submit" name="submit" value="Register"></center>
            </form>
        </section>
</body>
</html>

<?php
          if(isset($_POST["submit"]))
          {
            $link = mysqli_connect("localhost","root","");
              mysqli_select_db($link,"olms");
            mysqli_query($link,"insert into admin_registration values('$_POST[admin_id]','$_POST[admin_firstname]','$_POST[admin_lastname]','$_POST[password]','$_POST[address]','$_POST[phoneno]','no')");
          }
        ?>