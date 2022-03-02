<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"olms");
$id=$_GET["id"];
$date=date("d-m-y");
$res=mysqli_query($link,"update bookorder set book_return_date='$date' where id = $id");

$bookname;
$res=mysqli_query($link,"selct * from bookorder where id = $id");

while($row=mysqli_fetch_array($res))
{
    $bookname=$row["bookname"];
}
mysqli_query($link,"update book set availablecopy=availablecopy+1 where bookname='$bookname'");

?>

<script type="text/javascript">
    window.location="returnbook.php";
</script>