<?php require_once 'header.php';?>
<?php
check_admin();
$query = "delete from app_users where name = $_REQUEST[name] ";
$r = run_sql($query);
redirect("users.php?msg=2");
?>
<?php require_once 'footer.php';?>
