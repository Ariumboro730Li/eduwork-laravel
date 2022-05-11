<?php
// function set error to session flashdata
function set_flashdata($key, $value)
{
	$_SESSION['flashdata'][$key] = $value;
}

// get error from session flashdata and delete it
function get_flashdata($key)
{
	$value = $_SESSION['flashdata'][$key];
	unset($_SESSION['flashdata'][$key]);
	return $value;
}

// check if error exist in session flashdata
function flashdata_exist($key)
{
	return isset($_SESSION['flashdata'][$key]);
}

