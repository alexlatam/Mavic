<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mavic";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8"); //Estableciendo utf8
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
