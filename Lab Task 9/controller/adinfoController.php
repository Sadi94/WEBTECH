<?php
require_once '../model/db_connect.php';
require_once ('../model/model.php');
$mysqli = new mysqli("localhost", "root", "", "tinker");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT *  FROM `tinker` WHERE Username = ?";

$stmt = $mysqli->prepare($sql);

function fetch($username){
	return show($username);

}