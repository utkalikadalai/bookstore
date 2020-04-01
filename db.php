<?php

/**
  * Configuration for database connection
  *
  */

$host       = "127.0.0.1";
$username   = "root";
$password   = "password";
$dbname     = "bookstore"; // will use later
$con = new mysqli($host,$username,$password,$dbname);