<?php 
include_once('User.php');
/*
|===========================================================
|
|-----------------------------------------------------------
|	The Administrator is the 'Subject' in this pattern
|-----------------------------------------------------------
|
|===========================================================
|
*/
interface Administrator{
	public function registerUser(User $user);
	public function removeUser(User $user);
	public function notifyUser();
}