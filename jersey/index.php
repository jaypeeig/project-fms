<?php

if(isset($_POST)){
	error_log(json_encode($_POST));
}

echo json_encode($_POST);

