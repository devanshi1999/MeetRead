<?php
	include ("dbconnection.php");
	$query="CREATE DATABASE IF NOT EXISTS MeetRead";
	$run=mysqli_query($conn,$query);

	$query="CREATE TABLE IF NOT EXISTS `MeetRead`.`userdata` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`))";
	$run=mysqli_query($conn,$query);

	$query="CREATE TABLE IF NOT EXISTS `MeetRead`.`likedBooks` ( `id` INT NOT NULL AUTO_INCREMENT , `uid` INT NOT NULL , `bid` VARCHAR(100) NOT NULL , `title` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))";
	$run=mysqli_query($conn,$query);

	$query="CREATE TABLE IF NOT EXISTS `MeetRead`.`favorites` ( `id` INT NOT NULL AUTO_INCREMENT , `uid` INT NOT NULL , `bid` VARCHAR(100) NOT NULL , `title` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))";
	$run=mysqli_query($conn,$query);

	$query="CREATE TABLE IF NOT EXISTS `MeetRead`.`reading` ( `id` INT NOT NULL AUTO_INCREMENT , `uid` INT NOT NULL , `bid` VARCHAR(100) NOT NULL , `title` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))";
	$run=mysqli_query($conn,$query);

	$query="CREATE TABLE IF NOT EXISTS `MeetRead`.`Finished` ( `id` INT NOT NULL AUTO_INCREMENT , `uid` INT NOT NULL , `bid` VARCHAR(100) NOT NULL , `title` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))";
	$run=mysqli_query($conn,$query);

	$query="CREATE TABLE IF NOT EXISTS `MeetRead`.`readLater` ( `id` INT NOT NULL AUTO_INCREMENT , `uid` INT NOT NULL , `bid` VARCHAR(100) NOT NULL , `title` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`))";
	$run=mysqli_query($conn,$query);



	if($run)
	{
		
	}
	else
	{
		echo "error";
	}
?>