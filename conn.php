<?php
$host = 'localhost';
$dbname = 'database';
$username = 'root';
$password = '';
$conn = new mysqli($host, $username, $password, $dbname);
session_start();