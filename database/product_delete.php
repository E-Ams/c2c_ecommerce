<?php
include_once '../config.php';

$prodID = $_GET['id'];

session_start();

deleteProduct($prodID);