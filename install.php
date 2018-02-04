<?php
require_once 'include/const.php';

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or exit(mysqli_error($con));
echo "db connected<br>";

$query = "drop schema if exists $dbname";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "db dropped<br>";

$query = "create schema $dbname";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "db created<br>";

mysqli_select_db($con, $dbname);

$query = "CREATE  TABLE `app_users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `user_name` VARCHAR(45) NULL ,
  `email` VARCHAR(100) NULL ,
  `pass` VARCHAR(45) NULL ,
  `phone_no` VARCHAR(45) NULL ,
  `role` VARCHAR(45) NULL ,
  `status` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) );";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";

$query = "INSERT INTO `app_users` 
    (`user_name`, `email`, `pass`, `phone_no`, 
     `role`, `status`) 
    VALUES ('admin', 'admin', 'admin', 'admin', 
     'admin', 'approved');";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "user inserted<br>";

$query = "CREATE  TABLE `scheme` (
  `Ministry` varchar(100) ,
  `State` varchar(100) ,
  `Gender` varchar(20) ,
  `name` varchar(100) ,
  `Beneficiary` varchar(50) ,
  `Disability` varchar(10) ,
  `Salary` varchar(20) ,
  `Aim` varchar(2000));";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";

?>
