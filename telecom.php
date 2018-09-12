<?php
$servername="localhost";
$username="username";
$password="password";
$db_name="telecom";


mysql_connect( $db_name, $db_mrent, $db_freeI, $db_freeC, $db_call, $db_freeS, $db_SmsC, $db_dataC, $db_roamC)




if($resultcount > 0)
{
	mysql_query("UPDATE 'TELECOM' SET
				'name'='$name',
				'mrent'='$mrent'
				'freeI'='$freeI'
				'freeC'='$freeC'
				'call'='$call'
				'freeS'='$freeS'
				'SmsC'='$SmsC'
				'dataC'='$dataC'
				'roamC'='$roamC'
")			
	or die(mysql_error());
}
else
{	
	mysql_query("INSERT INTO 'TELECOM' (name, mrent, freeI, freeC, call, freeS, SmsC, dataC, roamC)
					VALUES ('$name','$mrent','$freeI','$freeC','$call','$freeS','$SmsC','$dataC','$roamC')")
	or die(mysql_error());
}
?>











			