just add in hstart page

<?php
session_start();
if (!isset(S_SESSION["adminid"]))
{
?>
<script type="">
	window.location="login.php";
<>
<?php
}
?>