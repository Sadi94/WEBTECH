<?php

require_once ('../model/model.php');

function fetchAllTinker(){
	return showAllTinker();

}
function fetchTinker($username){
	return showTinker($username);
}

?>