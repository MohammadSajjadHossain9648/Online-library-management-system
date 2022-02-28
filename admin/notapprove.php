<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"olms");
$id=$_GET["id"];
mysqli_query($link,"update registration set status='no' where id = $id");

?>

<script type="text/javascript">
    window.location="userprofile.php";
</script>