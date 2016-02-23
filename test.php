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
   echo 'connect successfully'.'<br/>';
		$eml=$_POST['email1'];
		 $pwd=$_POST['password'];
	
		 echo "<html> <body style='background-color:lightgreen'>";
		echo "email is =".$eml;
		echo "<br>";
		echo "password is ".$pwd;
		echo "</body></html><br/>";
		$db="INSERT INTO record(email,pswd) VALUES('$eml','$pwd')";
		mysql_select_db('student');
		$retval = mysql_query( $db, $conn );
   
		if(! $retval ) {
			die('Could not enter data: ' . mysql_error());
	}
	$retval1 = mysql_query('select * from record' , $conn );
   echo $retval1;
   echo "<br/>Entered data successfully\n";

	 mysql_close($conn);
}
?>