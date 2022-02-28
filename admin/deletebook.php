<?php 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"olms");
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    mysqli_query($link,"delete from book where id=$id");
    ?>
<script type="text/javascript">
    window.location="bookprofile.php";
</script>
<?php
}
else
{
    ?>
<script type="text/javascript">
    window.location="bookprofile.php";
</script>
<?php
}
?>