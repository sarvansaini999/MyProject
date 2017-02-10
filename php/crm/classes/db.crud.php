<?php
include_once 'includes/common.parameter.php';

class CRUD
{
 public function __construct()
 {
  $db = new DB_con();
 }
 
 public function create($uname,$email,$pass)
 {
  mysql_query("INSERT INTO users(uname,email,password) VALUES('$uname','$email','$pass')");
 }
 
 public function login ($email, $pass){
	$res = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$pass'");
	
	
	$user_data = mysql_fetch_array($res);  
	//print_r($user_data);  
	$no_rows = mysql_num_rows($res);  
	  
	if ($no_rows == 1)   
	{  
   
		$_SESSION['login'] = true;  
		$_SESSION['uid'] = $user_data['id'];  
		$_SESSION['uname'] = $user_data['uname'];  
		$_SESSION['email'] = $user_data['email'];  
		header('Location: welcome.php');
		return TRUE;  
	}  
	else  
	{  
		return FALSE;  
	}
	
 }
 
 public function read()
 {
  return mysql_query("SELECT * FROM users");
 }
 
 public function delete($id)
 {
  mysql_query("DELETE FROM users WHERE user_id=".$id);
 }
 
 public function update($fname,$lname,$city,$id)
 {
  mysql_query("UPDATE users SET first_name='$fname', last_name='$lname', user_city='$city' WHERE user_id=".$id);
 }
 
  public function add($u_id,$apm,$exp,$desc,$total,$date)
 {
	
	mysql_query("INSERT INTO budget(user_id,added,exp,description,total,date) VALUES('$u_id','$apm','$exp','$desc','$total','$date')");
	
 }
 
 public function get_last_row($user_id)
 {
  $res = mysql_query("select total from budget where user_id = " .$user_id . " ORDER BY id DESC LIMIT 1");
  
  $budget = mysql_fetch_array($res);  
	
		
		$total = $budget['total'];  
		
	return $total;
 }
 
	
}




?>
