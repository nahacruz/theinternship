<?php
$mysqli_connection =  new mysqli("localhost","root","");

$mysqli_connection ->query("CREATE DATABASE IF NOT EXIST internship");
