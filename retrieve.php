<?php
$hostname = "localhost";
$username = "root";
$password = "";
if(isset($_POST['submit']))
{	$conn = mysql_connect($hostname,$username,$password); 
	if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $db_selected=mysql_select_db('student',$conn);
   if(!$db_selected){
	   die('can\'t use'.'student'.':'.mysql_error());
   }
		$sql = 'SELECT id, email, pswd FROM record';
   //mysql_select_db('student');
   $retval = mysql_query( $sql, $conn );
   
   if(!$retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "--------------------------------<br>";
   }
}
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
   