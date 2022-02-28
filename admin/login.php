<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>WELCOME TO LOGIN PAGE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background">
        <header>
            <div>
                <p style="color:deepskyblue;text-align: center; font-size: 40px" ><img src="headerpic.png" width="200px" height="110">ADMIN LOGIN PAGE</p>
            </div>  
        </header>
        
        <section> 
          <form action="" method="post">
            <br><br><br><br><br><br>
            <p><center><input type="text" name="admin_id" placeholder="enter admin_id" maxlength="10" required></center></p>
            <p><center><input type="password" name="password" placeholder="enter password" maxlength="15" required></center></p>
            <center><input type="submit" name="submit" value="submit"></center>
          </form>
        </section>
      
        <footer>
            <p style="color:white;text-align: center;">
				Email: Onlinelibrary@gmail.com <br><br>
				Mobile:+8801713456789
			</p>
        </footer>
    </div>
</body>
</html>

<?php

if(isset($_POST["submit"]))
{
  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"olms");
  $res=mysqli_query($link,"select * from admin_registration where admin_id = '$_POST[admin_id]' && password = '$_POST[password]' && status='yes'");
  $count=0;
  $count=mysqli_num_rows($res);
  
  if($count == 0)
  {
    ?>
     <p><b>invalid user_id or password. </b></p>
<?php
  }

  else
  {
    $_SESSION["adminid"]=$_POST["admin_id"];
    ?>
 
    <script type="text/javascript">
        window.location="adminpageindex.html";
    </script>
<?php
  }

}
?>